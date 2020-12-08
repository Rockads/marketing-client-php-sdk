<?php

namespace Rockads\Connect\Snapchat\Entity;

/**
 * Class Creative
 * @package Rockads\Connect\Snapchat\Entity
 */
class Creative
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $adAccountId;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $packagingStatus;
    /**
     * @var string
     */
    private $brandName;
    /**
     * @var ?array
     */
    private $appInstallProperties;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Creative
     */
    public function setId($id): Creative
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Creative
     */
    public function setName($name): Creative
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdAccountId()
    {
        return $this->adAccountId;
    }

    /**
     * @param string $adAccountId
     * @return Creative
     */
    public function setAdAccountId($adAccountId): Creative
    {
        $this->adAccountId = $adAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Creative
     */
    public function setType($type): Creative
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackagingStatus()
    {
        return $this->packagingStatus;
    }

    /**
     * @param string $packagingStatus
     * @return Creative
     */
    public function setPackagingStatus($packagingStatus): Creative
    {
        $this->packagingStatus = $packagingStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return Creative
     */
    public function setBrandName($brandName): Creative
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAppInstallProperties(): ?array
    {
        return $this->appInstallProperties;
    }

    /**
     * @param array|null $appInstallProperties
     * @return Creative
     */
    public function setAppInstallProperties(?array $appInstallProperties): Creative
    {
        $this->appInstallProperties = $appInstallProperties;
        return $this;
    }


    /**
     * @param $data
     * @return $this
     */
    public function load($data)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->adAccountId = $data['ad_account_id'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->packagingStatus = $data['packaging_status'] ?? null;
        $this->brandName = $data['brand_name'] ?? null;
        $this->appInstallProperties = $data['app_install_properties'] ?? null;

        return $this;
    }


}