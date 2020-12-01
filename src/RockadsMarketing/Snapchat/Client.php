<?php

namespace Rockads\Connect\Snapchat;

use Rockads\Connect\Exception\TokenExpireException;
use Rockads\Connect\Snapchat\Entity\Campaigns;
use Rockads\Connect\Snapchat\Entity\Credentials;
use Rockads\Connect\Snapchat\Entity\Pagination;

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

            $campaigns = new Campaigns();
            $pagination = new Pagination();
            $campaigns->setPagination($pagination);

            return $campaigns;
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
        $this->credentials->setAccessToken($data['accessToken']);

    }
}