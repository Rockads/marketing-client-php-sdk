<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class CampaignEntity
 * @package Rockads\Connect\Snapchat\Entity
 */
class CampaignEntity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $updatesAt;

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
    private $adAccountId;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $objective;
    /**
     * @var ?array
     */
    private $measurementSpec;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var string
     */
    private $buyModel;
    /**
     * @var string
     *
     */
    private $deliveryStatus;

    /**
     * @var float
     *
     */
    private $dailyBudget;


    /**
     * @var float
     *
     */
    private $lifetimeBudget;

    /**
     * @var ?array
     *
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
    public function getUpdatesAt(): \DateTime
    {
        return $this->updatesAt;
    }

    /**
     * @param \DateTime $updatesAt
     */
    public function setUpdatesAt(\DateTime $updatesAt)
    {
        $this->updatesAt = $updatesAt;
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
    public function getAdAccountId()
    {
        return $this->adAccountId;
    }

    /**
     * @param string $adAccountId
     */
    public function setAdAccountId($adAccountId)
    {
        $this->adAccountId = $adAccountId;
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
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * @param string $objective
     */
    public function setObjective($objective)
    {
        $this->objective = $objective;
    }

    /**
     * @return array|null
     */
    public function getMeasurementSpec()
    {
        return $this->measurementSpec;
    }

    /**
     * @param array|null $measurementSpec
     */
    public function setMeasurementSpec($measurementSpec)
    {
        $this->measurementSpec = $measurementSpec;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    /**
     * @param \DateTime $startTime
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getBuyModel()
    {
        return $this->buyModel;
    }

    /**
     * @param string $buyModel
     */
    public function setBuyModel($buyModel)
    {
        $this->buyModel = $buyModel;
    }

    /**
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param string $deliveryStatus
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
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
     * @return CampaignEntity
     */
    public function setRaw($raw): CampaignEntity
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * @return string
     */
    public function getDailyBudget()
    {
        return $this->dailyBudget;
    }

    /**
     * @param string $dailyBudget
     * @return CampaignEntity
     */
    public function setDailyBudget($dailyBudget): CampaignEntity
    {
        $this->dailyBudget = $dailyBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getLifetimeBudget()
    {
        return $this->lifetimeBudget;
    }

    /**
     * @param float $lifetimeBudget
     * @return CampaignEntity
     */
    public function setLifetimeBudget($lifetimeBudget): CampaignEntity
    {
        $this->lifetimeBudget = $lifetimeBudget;
        return $this;
    }


    public function load($data)
    {
        $this->id = $data['id'];
        $this->updatesAt = new \DateTime($data['updated_at']);
        $this->createdAt = new \DateTime($data['created_at']);
        $this->startTime = new \DateTime($data['start_time']);
        $this->name = $data['name'];
        $this->adAccountId = $data['ad_account_id'];
        $this->status = $data['status'];
        $this->objective = $data['objective'];
        $this->measurementSpec = $data['measurement_spec'];
        $this->buyModel = $data['buy_model'];
        $this->deliveryStatus = $data['delivery_status'];
        $this->dailyBudget = isset($data['daily_budget_micro']) ? $data['daily_budget_micro'] / 1000000 : 0.0;
        $this->lifetimeBudget = isset($data['lifetime_spend_cap_micro']) ? $data['lifetime_spend_cap_micro'] / 1000000 : 0.0;
        $this->raw = $data;

        return $this;
    }

}