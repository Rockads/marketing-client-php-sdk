<?php

namespace Rockads\Connect\Snapchat;

use Rockads\Connect\Snapchat\Entity\Credentials;

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


    public function getAdAccounts($organizationId)
    {
        $data = $this->get("organizations/" . $organizationId . "/adaccounts");
        print_r($data);

    }

    public function getCampaigns($adAccountId, $parameters = [])
    {
        try {
            $data = $this->get("adaccounts/" . $adAccountId . "/campaigns", $parameters);
            return $data;
        } catch (\Rockads\Connect\Exception\AuthorizationException $e) {
            $this->refreshToken();
        } catch (\Exception $e) {

        }

    }

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
        print_r($data);
        die();

    }
}