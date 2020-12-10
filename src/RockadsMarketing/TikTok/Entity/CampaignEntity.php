<?php

namespace Rockads\Connect\TikTok\Entity;


class CampaignEntity
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
    private $budgetMode;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $objectiveType;
    /**
     * @var float
     */
    private $budget;
    /**
     * @var string
     */
    private $advertiserId;
    /**
     * @var \DateTime
     */
    private $createTime;
    /**
     * @var \DateTime
     */
    private $modifyTime;
    /**
     * @var string
     */
    private $objective;
    /**
     * @var string
     */
    private $optStatus;

    /**
     * @var array
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
     * @return CampaignEntity
     */
    public function setId($id): CampaignEntity
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
     * @return CampaignEntity
     */
    public function setName($name): CampaignEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetMode()
    {
        return $this->budgetMode;
    }

    /**
     * @param string $budgetMode
     * @return CampaignEntity
     */
    public function setBudgetMode($budgetMode): CampaignEntity
    {
        $this->budgetMode = $budgetMode;
        return $this;
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
     * @return CampaignEntity
     */
    public function setStatus($status): CampaignEntity
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectiveType()
    {
        return $this->objectiveType;
    }

    /**
     * @param string $objectiveType
     * @return CampaignEntity
     */
    public function setObjectiveType($objectiveType): CampaignEntity
    {
        $this->objectiveType = $objectiveType;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return CampaignEntity
     */
    public function setBudget($budget): CampaignEntity
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @param string $advertiserId
     * @return CampaignEntity
     */
    public function setAdvertiserId($advertiserId): CampaignEntity
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTime(): \DateTime
    {
        return $this->createTime;
    }

    /**
     * @param \DateTime $createTime
     * @return CampaignEntity
     */
    public function setCreateTime(\DateTime $createTime): CampaignEntity
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifyTime(): \DateTime
    {
        return $this->modifyTime;
    }

    /**
     * @param \DateTime $modifyTime
     * @return CampaignEntity
     */
    public function setModifyTime(\DateTime $modifyTime): CampaignEntity
    {
        $this->modifyTime = $modifyTime;
        return $this;
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
     * @return CampaignEntity
     */
    public function setObjective($objective): CampaignEntity
    {
        $this->objective = $objective;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptStatus()
    {
        return $this->optStatus;
    }

    /**
     * @param string $optStatus
     * @return CampaignEntity
     */
    public function setOptStatus($optStatus): CampaignEntity
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return array
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param array $raw
     * @return CampaignEntity
     */
    public function setRaw($raw): CampaignEntity
    {
        $this->raw = $raw;
        return $this;
    }


    public function load($campaign)
    {
        $this->raw = $campaign;
        $this->budgetMode = $campaign['budget_mode'] ?? null;
        $this->status = $campaign['status'] ?? null;
        $this->objectiveType = $campaign['objective_type'] ?? null;
        $this->budget = $campaign['budget'] ?? 0.0;
        $this->id = $campaign['campaign_id'] ?? null;
        $this->name = $campaign['campaign_name'] ?? null;
        $this->advertiserId = $campaign['advertiser_id'] ?? null;
        $this->createTime = isset($campaign['create_time']) ? new \DateTime($campaign['create_time']) : null;
        $this->modifyTime = isset($campaign['modify_time']) ? new \DateTime($campaign['modify_time']) : null;
        $this->objective = $campaign['objective'] ?? null;
        $this->optStatus = $campaign['opt_status'] ?? null;

        return $this;

    }


}