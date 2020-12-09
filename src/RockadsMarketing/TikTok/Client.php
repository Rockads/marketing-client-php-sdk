<?php

namespace Rockads\Connect\Tiktok;

use Rockads\Connect\Exception\ServiceException;
use Rockads\Connect\Exception\TokenExpireException;
use Rockads\Connect\TikTok\Entity\AdGroups;
use Rockads\Connect\TikTok\Entity\Ads;
use Rockads\Connect\TikTok\Entity\Campaigns;
use Rockads\Connect\TikTok\Entity\Credentials;

/**
 * Class Client
 * @package Rockads\Connect\Tiktok
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
    private $apiEndpoint = 'https://ads.tiktok.com/open_api/';


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
     * @param $advertiserId
     * @param array $parameters
     * @return Campaigns
     * @throws ServiceException
     * @throws TokenExpireException
     */
    public function getCampaigns($advertiserId, $parameters = []): Campaigns
    {
        try {
            $parameters['advertiser_id'] = $advertiserId;
            $data = $this->get('campaign/get', $parameters);

            $campaigns = new Campaigns();
            $campaigns->load($data);

            return $campaigns;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException();
        }

    }


    /**
     * @param $advertiserId
     * @param array $parameters
     * @return AdGroups
     * @throws ServiceException
     * @throws TokenExpireException
     */
    public function getAdGroups($advertiserId, $parameters = []): AdGroups
    {
        try {
            $parameters['advertiser_id'] = $advertiserId;
            $data = $this->get('adgroup/get', $parameters, '2');

            $adGroups = new AdGroups();
            $adGroups->load($data);

            return $adGroups;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage());
        }

    }


    public function getAds($advertiserId, $parameters = []): Ads
    {
        try {
            $parameters['advertiser_id'] = $advertiserId;
            $data = $this->get('ad/get', $parameters);
            $ads = new Ads();
            $ads->load($data);

            return $ads;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage());
        }

    }

    public function getReport($advertiserId, $parameters = []): Ads
    {
        try {
            $parameters['advertiser_id'] = $advertiserId;
            $data = $this->get('audience/campaign/get', $parameters);

            print_r($data);
            die('');

            $ads = new Ads();
            $ads->load($data);

            return $ads;

        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            throw new TokenExpireException();
        } catch (\Exception $e) {
            throw new ServiceException($e->getMessage());
        }

    }

}