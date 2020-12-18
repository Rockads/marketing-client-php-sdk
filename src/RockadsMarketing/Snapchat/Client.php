<?php

namespace Rockads\Connect\Snapchat;

use Rockads\Connect\Exception\ServiceException;
use Rockads\Connect\Exception\TokenExpireException;
use Rockads\Connect\Snapchat\Entity\Ads;
use Rockads\Connect\Snapchat\Entity\AdsetEntity;
use Rockads\Connect\Snapchat\Entity\Adsets;
use Rockads\Connect\Snapchat\Entity\CampaignEntity;
use Rockads\Connect\Snapchat\Entity\Campaigns;
use Rockads\Connect\Snapchat\Entity\Creative;
use Rockads\Connect\Snapchat\Entity\Credentials;
use Rockads\Connect\Snapchat\Entity\Pagination;
use Rockads\Connect\Snapchat\Entity\Report;

/**
 * Class Client
 * @package Rockads\Connect\Snapchat
 */
class Client extends HttpClient
{

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $apiEndpoint = 'https://adsapi.snapchat.com/';

    /**
     * Client constructor.
     * @param Credentials $credentials
     */
    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return Credentials
     */
    public function getCredentials(): Credentials
    {
        return $this->credentials;
    }


    /**
     * @param Credentials $credentials
     * @return $this
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }

    /**
     * @param string $apiEndpoint
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }


    /**
     * @param $organizationId
     * @throws \Rockads\Connect\Exception\ServiceException
     */
    public function getAdAccounts($organizationId)
    {
        $data = $this->get("organizations/" . $organizationId . "/adaccounts");
        print_r($data);

    }

    /**
     * @param $adAccountId
     * @param array $parameters
     * @return Campaigns
     */
    public function getCampaigns($adAccountId, $parameters = []): Campaigns
    {
        try {

            $data = $this->get("adaccounts/" . $adAccountId . "/campaigns", $parameters);
            $pagination = new Pagination();
            $pagination->load($data['paging']);

            $campaigns = new Campaigns();
            $campaigns->setCampaigns($data);
            $campaigns->setPagination($pagination);

            return $campaigns;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }

    }

    /**
     * @param $adAccountId
     * @param array $parameters
     * @return Adsets
     */
    public function getAdsets(CampaignEntity $campaign, $parameters = []): Adsets
    {
        try {

            $parameters['return_placement_v2'] = true;

            $data = $this->get("campaigns/" . $campaign->getId() . "/adsquads", $parameters);
            $pagination = new Pagination();
            $pagination->load($data['paging']);

            $adsets = new Adsets();
            $adsets->setAdsets($data);
            $adsets->setPagination($pagination);

            return $adsets;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }

    }


    /**
     * @param AdsetEntity $adset
     * @param array $parameters
     * @return Ads
     * @throws ServiceException
     * @throws TokenExpireException
     */
    public function getAds(AdsetEntity $adset, $parameters = []): Ads
    {
        try {

            $data = $this->get("adsquads/" . $adset->getId() . "/ads", $parameters);
            $pagination = new Pagination();
            $pagination->load($data['paging']);

            $ads = new Ads();
            $ads->setAds($data);
            $ads->setPagination($pagination);

            return $ads;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }

    }


    /**
     * @param $adId
     * @param array $parameters
     * @return Report|null
     * @throws ServiceException
     * @throws TokenExpireException
     */
    public function getReport($adId, $parameters = []): ?Report
    {
        try {

            $data = $this->get("ads/" . $adId . "/stats", $parameters);
            $report = new Report();
            $report->setReports($data, $adId);
            return $report;
        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }
    }

    /**
     * @param $creativeId
     * @param array $parameters
     * @return Creative
     * @throws ServiceException
     * @throws TokenExpireException
     */
    public function getCreative($creativeId, $parameters = []): ?Creative
    {
        try {

            $data = $this->get("creatives/" . $creativeId, $parameters);
            $creative = new Creative();
            $creative->load($data['creatives'][0]['creative']);
            return $creative;
        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }
    }

    /**
     * @throws \Rockads\Connect\Exception\ServiceException
     */
    public function refreshToken()
    {

        $this->setApiEndpoint('https://accounts.snapchat.com/');

        $parameters = [
            "client_id" => $this->credentials->getClientId(),
            "client_secret" => $this->credentials->getClientSecret(),
            "grant_type" => "refresh_token",
            "refresh_token" => $this->credentials->getRefreshToken(),
        ];

        $data = $this->post('login/oauth2/access_token', $parameters, null);

        $credentials = new Credentials();
        $credentials->setClientId($this->credentials->getClientId())
            ->setClientSecret($this->credentials->getClientSecret())
            ->setAccessToken($data['access_token'])
            ->setRefreshToken($data['refresh_token']);

        return $credentials;

    }
}