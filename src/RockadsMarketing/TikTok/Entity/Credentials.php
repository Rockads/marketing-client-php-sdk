<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class Credentials
 * @package Rockads\Connect\TikTok\Entity
 */
class Credentials
{
    /**
     * @var string
     */
    private $appId;

    /**
     * @var string
     */
    private $secret;
    /**
     * @var string
     */
    private $authCode;

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return Credentials
     */
    public function setAppId($appId): Credentials
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return Credentials
     */
    public function setSecret($secret): Credentials
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return Credentials
     */
    public function setAuthCode($authCode): Credentials
    {
        $this->authCode = $authCode;
        return $this;
    }


}