<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class Credentials
 * @package Rockads\Connect\Snapchat\Entity
 */
class Credentials
{

    /**
     * @var
     */
    private $accessToken;

    /**
     * @var
     */
    private $clientId;
    /**
     * @var
     */
    private $clientSecret;

    /**
     * @var
     */
    private $refreshToken;


    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }


    /**
     * @param $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }


    /**
     * @param $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param mixed $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }


}