<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class AdEntity
 * @package Rockads\Connect\Snapchat\Entity
 */
class AdEntity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $adsetId;
    /**
     * @var string
     */
    private $creativeId;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $renderType;

    /**
     * @var string
     */
    private $reviewStatus;

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var ?array
     */
    private $reviewStatusReasons;
    /**
     * @var ?array
     */
    private $deliveryStatus;

    /**
     * @var ?array
     */
    private $raw;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAdsetId()
    {
        return $this->adsetId;
    }

    /**
     * @param string $adsetId
     */
    public function setAdsetId($adsetId)
    {
        $this->adsetId = $adsetId;
    }

    /**
     * @return string
     */
    public function getCreativeId()
    {
        return $this->creativeId;
    }

    /**
     * @param string $creativeId
     */
    public function setCreativeId($creativeId)
    {
        $this->creativeId = $creativeId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getRenderType()
    {
        return $this->renderType;
    }

    /**
     * @param string $renderType
     */
    public function setRenderType($renderType)
    {
        $this->renderType = $renderType;
    }

    /**
     * @return string
     */
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }

    /**
     * @param string $reviewStatus
     */
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }

    /**
     * @return array|null
     */
    public function getReviewStatusReasons()
    {
        return $this->reviewStatusReasons;
    }

    /**
     * @param array|null $reviewStatusReasons
     */
    public function setReviewStatusReasons($reviewStatusReasons)
    {
        $this->reviewStatusReasons = $reviewStatusReasons;
    }

    /**
     * @return array|null
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param array|null $deliveryStatus
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return AdEntity
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param array|null $raw
     * @return AdEntity
     */
    public function setRaw($raw): AdEntity
    {
        $this->raw = $raw;
        return $this;
    }


    public function load($data)
    {
        $this->id = $data['id'];
        $this->updatedAt = new \DateTime($data['updated_at']);
        $this->createdAt = new \DateTime($data['created_at']);
        $this->name = $data['name'];
        $this->adsetId = $data['ad_squad_id'];
        $this->type = $data['type'];
        $this->creativeId = $data['creative_id'];
        $this->status = $data['status'];
        $this->type = $data['type'];
        $this->renderType = $data['render_type'];
        $this->reviewStatus = $data['review_status'];
        $this->reviewStatusReasons = $data['review_status_reasons'];
        $this->deliveryStatus = $data['delivery_status'];
        $this->raw = $data;

        return $this;
    }

}