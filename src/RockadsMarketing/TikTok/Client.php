<?php

namespace Rockads\Connect\Tiktok;

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

}