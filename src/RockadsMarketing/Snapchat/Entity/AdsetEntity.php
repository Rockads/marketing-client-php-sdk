<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class AdsetEntity
 * @package Rockads\Connect\Snapchat\Entity
 */
class AdsetEntity
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
    private $campaignId;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $type;
    /**
     * @var
     */
    private $targeting;

    /**
     * @var string
     */
    private $targetingReachStatus;

    /**
     * @var string
     */
    private $placement;
    /**
     * @var string
     */
    private $billingEvent;
    /**
     * @var string
     */
    private $bidMicro;

    /**
     * @var boolean
     */
    private $autoBid;

    /**
     * @var int
     */
    private $targetBid;

    /**
     * @var string
     */
    private $bidStrategy;

    /**
     * @var string
     */
    private $dailyBudgetMicro;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var string
     */
    private $optimizationGoal;
    /**
     * @var string
     *
     */
    private $deliveryConstraint;

    /**
     * @var string
     *
     */
    private $pacingType;

    /**
     * @var string
     *
     */
    private $creationState;

    /**
     * @var string
     *
     */
    private $deliveryStatus;

    /**
     * @var string
     *
     */
    private $accountId;


    /**
     * @var int
     *
     */
    private $appId;


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
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param string $campaignId
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
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
     * @return array|null
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    /**
     * @param array|null $targeting
     */
    public function setTargeting($targeting)
    {
        $this->targeting = $targeting;
    }

    /**
     * @return string
     */
    public function getTargetingReachStatus()
    {
        return $this->targetingReachStatus;
    }

    /**
     * @param string $targetingReachStatus
     */
    public function setTargetingReachStatus($targetingReachStatus)
    {
        $this->targetingReachStatus = $targetingReachStatus;
    }

    /**
     * @return string
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * @param string $placement
     */
    public function setPlacement($placement)
    {
        $this->placement = $placement;
    }

    /**
     * @return string
     */
    public function getBillingEvent()
    {
        return $this->billingEvent;
    }

    /**
     * @param string $billingEvent
     */
    public function setBillingEvent($billingEvent)
    {
        $this->billingEvent = $billingEvent;
    }

    /**
     * @return string
     */
    public function getBidMicro()
    {
        return $this->bidMicro;
    }

    /**
     * @param string $bidMicro
     */
    public function setBidMicro($bidMicro)
    {
        $this->bidMicro = $bidMicro;
    }

    /**
     * @return bool
     */
    public function isAutoBid()
    {
        return $this->autoBid;
    }

    /**
     * @param bool $autoBid
     */
    public function setAutoBid($autoBid)
    {
        $this->autoBid = $autoBid;
    }

    /**
     * @return int
     */
    public function getTargetBid()
    {
        return $this->targetBid;
    }

    /**
     * @param int $targetBid
     */
    public function setTargetBid($targetBid)
    {
        $this->targetBid = $targetBid;
    }

    /**
     * @return string
     */
    public function getBidStrategy()
    {
        return $this->bidStrategy;
    }

    /**
     * @param string $bidStrategy
     */
    public function setBidStrategy($bidStrategy)
    {
        $this->bidStrategy = $bidStrategy;
    }

    /**
     * @return string
     */
    public function getDailyBudgetMicro()
    {
        return $this->dailyBudgetMicro;
    }

    /**
     * @param string $dailyBudgetMicro
     */
    public function setDailyBudgetMicro($dailyBudgetMicro)
    {
        $this->dailyBudgetMicro = $dailyBudgetMicro;
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
    public function getOptimizationGoal()
    {
        return $this->optimizationGoal;
    }

    /**
     * @param string $optimizationGoal
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->optimizationGoal = $optimizationGoal;
    }

    /**
     * @return string
     */
    public function getDeliveryConstraint()
    {
        return $this->deliveryConstraint;
    }

    /**
     * @param string $deliveryConstraint
     */
    public function setDeliveryConstraint($deliveryConstraint)
    {
        $this->deliveryConstraint = $deliveryConstraint;
    }

    /**
     * @return string
     */
    public function getPacingType()
    {
        return $this->pacingType;
    }

    /**
     * @param string $pacingType
     */
    public function setPacingType($pacingType)
    {
        $this->pacingType = $pacingType;
    }

    /**
     * @return string
     */
    public function getCreationState()
    {
        return $this->creationState;
    }

    /**
     * @param string $creationState
     */
    public function setCreationState($creationState)
    {
        $this->creationState = $creationState;
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
     * @return AdsetEntity
     */
    public function setAccountId($accountId): AdsetEntity
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
     * @return AdsetEntity
     */
    public function setRaw($raw): AdsetEntity
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param int $appId
     * @return AdsetEntity
     */
    public function setAppId($appId): AdsetEntity
    {
        $this->appId = $appId;
        return $this;
    }


    public function load($data)
    {
        $this->id = $data['id'];
        $this->updatedAt = new \DateTime($data['updated_at']);
        $this->createdAt = new \DateTime($data['created_at']);
        $this->startTime = new \DateTime($data['start_time']);
        $this->name = $data['name'];
        $this->campaignId = $data['campaign_id'];
        $this->type = $data['type'];
        $this->status = $data['status'];
        $this->targeting = $data['targeting'];
        $this->targetingReachStatus = $data['targeting_reach_status'];
        $this->placement = $data['placement'];
        $this->billingEvent = $data['billing_event'];
        $this->bidMicro = $data['bid_micro'];
        $this->autoBid = $data['auto_bid'];
        $this->targetBid = $data['target_bid'];
        $this->bidStrategy = $data['bid_strategy'];
        $this->dailyBudgetMicro = $data['daily_budget_micro'];
        $this->optimizationGoal = $data['optimization_goal'];
        $this->deliveryConstraint = $data['delivery_constraint'];
        $this->pacingType = $data['pacing_type'];
        $this->creationState = $data['creation_state'];
        $this->deliveryStatus = $data['delivery_status'];
        $this->appId = 0;
        $this->raw = $data;

        return $this;
    }

}