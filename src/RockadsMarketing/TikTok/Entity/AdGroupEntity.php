<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class AdGroupEntity
 * @package Rockads\Connect\TikTok\Entity
 */
class AdGroupEntity
{

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $videoDownload;

    /**
     * @var string
     */
    private $openUrl;

    /**
     * @var int
     */
    private $actionDays;
    /**
     * @var int
     */
    private $conversionId;

    /**
     * @var string
     */
    private $operationSystem;
    /**
     * @var string
     */
    private $appName;

    /**
     * @var string
     */
    private $appDownloadUrl;
    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var float
     */
    private $conversionBid;
    /**
     * @var string
     */
    private $appType;
    /**
     * @var int
     */
    private $appId;

    /**
     * @var ?array
     */
    private $interestCategory;
    /**
     * @var \DateTime
     */
    private $scheduleStartTime;

    /**
     * @var \DateTime
     */
    private $modifyTime;
    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $advertiserId;

    /**
     * @var ?array
     */
    private $location;

    /**
     * @var ?array
     */
    private $videoActions;

    /**
     * @var string
     */
    private $billingEvent;

    /**
     * @var string
     */
    private $isCommentDisable;


    /**
     * @var ?array
     */
    private $placement;

    /**
     * @var ?array
     */
    private $actionScene;

    /**
     * @var ?array
     */
    private $carriers;

    /**
     * @var string
     */
    private $package;

    /**
     * @var string
     */
    private $deepBidType;

    /**
     * @var string
     */
    private $pacing;

    /**
     * @var string
     */
    private $optStatus;
    /**
     * @var ?Array
     */
    private $age;

    /**
     * @var float
     */
    private $bid;

    /**
     * @var int
     */
    private $category;
    /**
     * @var string
     */
    private $bidType;
    /**
     * @var string
     */
    private $placementType;

    /**
     * @var string
     */
    private $scheduleType;
    /**
     * @var string
     */
    private $buyImpression;

    /**
     * @var ?array
     */
    private $languages;
    /**
     * @var string
     */
    private $externalAction;
    /**
     * @var string
     */
    private $creativeMaterialMode;
    /**
     * @var \DateTime
     */
    private $schedulEndTime;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var ?array
     */
    private $actionCategories;

    /**
     * @var string
     */
    private $optimizeGoal;

    /**
     * @var float
     */
    private $budget;

    /**
     * @var string
     */
    private $budgetMode;

    /**
     * @var int
     */
    private $applicationId;

    /**
     * @var array
     */
    private $raw;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AdGroupEntity
     */
    public function setId($id): AdGroupEntity
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
     * @return AdGroupEntity
     */
    public function setName($name): AdGroupEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoDownload()
    {
        return $this->videoDownload;
    }

    /**
     * @param string $videoDownload
     * @return AdGroupEntity
     */
    public function setVideoDownload($videoDownload): AdGroupEntity
    {
        $this->videoDownload = $videoDownload;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrl()
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return AdGroupEntity
     */
    public function setOpenUrl($openUrl): AdGroupEntity
    {
        $this->openUrl = $openUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getActionDays()
    {
        return $this->actionDays;
    }

    /**
     * @param int $actionDays
     * @return AdGroupEntity
     */
    public function setActionDays($actionDays): AdGroupEntity
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getConversionId()
    {
        return $this->conversionId;
    }

    /**
     * @param int $conversionId
     * @return AdGroupEntity
     */
    public function setConversionId($conversionId): AdGroupEntity
    {
        $this->conversionId = $conversionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationSystem()
    {
        return $this->operationSystem;
    }

    /**
     * @param string $operationSystem
     * @return AdGroupEntity
     */
    public function setOperationSystem($operationSystem): AdGroupEntity
    {
        $this->operationSystem = $operationSystem;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return AdGroupEntity
     */
    public function setAppName($appName): AdGroupEntity
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppDownloadUrl()
    {
        return $this->appDownloadUrl;
    }

    /**
     * @param string $appDownloadUrl
     * @return AdGroupEntity
     */
    public function setAppDownloadUrl($appDownloadUrl): AdGroupEntity
    {
        $this->appDownloadUrl = $appDownloadUrl;
        return $this;
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
     * @return AdGroupEntity
     */
    public function setCampaignId($campaignId): AdGroupEntity
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionBid()
    {
        return $this->conversionBid;
    }

    /**
     * @param float $conversionBid
     * @return AdGroupEntity
     */
    public function setConversionBid($conversionBid): AdGroupEntity
    {
        $this->conversionBid = $conversionBid;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppType()
    {
        return $this->appType;
    }

    /**
     * @param string $appType
     * @return AdGroupEntity
     */
    public function setAppType($appType): AdGroupEntity
    {
        $this->appType = $appType;
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
     * @return AdGroupEntity
     */
    public function setAppId($appId): AdGroupEntity
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getInterestCategory(): ?array
    {
        return $this->interestCategory;
    }

    /**
     * @param array|null $interestCategory
     * @return AdGroupEntity
     */
    public function setInterestCategory(?array $interestCategory): AdGroupEntity
    {
        $this->interestCategory = $interestCategory;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduleStartTime(): \DateTime
    {
        return $this->scheduleStartTime;
    }

    /**
     * @param \DateTime $scheduleStartTime
     * @return AdGroupEntity
     */
    public function setScheduleStartTime(\DateTime $scheduleStartTime): AdGroupEntity
    {
        $this->scheduleStartTime = $scheduleStartTime;
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
     * @return AdGroupEntity
     */
    public function setModifyTime(\DateTime $modifyTime): AdGroupEntity
    {
        $this->modifyTime = $modifyTime;
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
     * @return AdGroupEntity
     */
    public function setCreateTime(\DateTime $createTime): AdGroupEntity
    {
        $this->createTime = $createTime;
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
     * @return AdGroupEntity
     */
    public function setStatus($status): AdGroupEntity
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return AdGroupEntity
     */
    public function setAdvertiserId($advertiserId): AdGroupEntity
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getLocation(): ?array
    {
        return $this->location;
    }

    /**
     * @param array|null $location
     * @return AdGroupEntity
     */
    public function setLocation(?array $location): AdGroupEntity
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getVideoActions(): ?array
    {
        return $this->videoActions;
    }

    /**
     * @param array|null $videoActions
     * @return AdGroupEntity
     */
    public function setVideoActions(?array $videoActions): AdGroupEntity
    {
        $this->videoActions = $videoActions;
        return $this;
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
     * @return AdGroupEntity
     */
    public function setBillingEvent($billingEvent): AdGroupEntity
    {
        $this->billingEvent = $billingEvent;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsCommentDisable()
    {
        return $this->isCommentDisable;
    }

    /**
     * @param string $isCommentDisable
     * @return AdGroupEntity
     */
    public function setIsCommentDisable($isCommentDisable): AdGroupEntity
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPlacement(): ?array
    {
        return $this->placement;
    }

    /**
     * @param array|null $placement
     * @return AdGroupEntity
     */
    public function setPlacement(?array $placement): AdGroupEntity
    {
        $this->placement = $placement;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getActionScene(): ?array
    {
        return $this->actionScene;
    }

    /**
     * @param array|null $actionScene
     * @return AdGroupEntity
     */
    public function setActionScene(?array $actionScene): AdGroupEntity
    {
        $this->actionScene = $actionScene;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCarriers(): ?array
    {
        return $this->carriers;
    }

    /**
     * @param array|null $carriers
     * @return AdGroupEntity
     */
    public function setCarriers(?array $carriers): AdGroupEntity
    {
        $this->carriers = $carriers;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param string $package
     * @return AdGroupEntity
     */
    public function setPackage($package): AdGroupEntity
    {
        $this->package = $package;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeepBidType()
    {
        return $this->deepBidType;
    }

    /**
     * @param string $deepBidType
     * @return AdGroupEntity
     */
    public function setDeepBidType($deepBidType): AdGroupEntity
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPacing()
    {
        return $this->pacing;
    }

    /**
     * @param string $pacing
     * @return AdGroupEntity
     */
    public function setPacing($pacing): AdGroupEntity
    {
        $this->pacing = $pacing;
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
     * @return AdGroupEntity
     */
    public function setOptStatus($optStatus): AdGroupEntity
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return Array|null
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param Array|null $age
     * @return AdGroupEntity
     */
    public function setAge(?array $age): AdGroupEntity
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return AdGroupEntity
     */
    public function setBid($bid): AdGroupEntity
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return AdGroupEntity
     */
    public function setCategory($category): AdGroupEntity
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getBidType()
    {
        return $this->bidType;
    }

    /**
     * @param string $bidType
     * @return AdGroupEntity
     */
    public function setBidType($bidType): AdGroupEntity
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlacementType()
    {
        return $this->placementType;
    }

    /**
     * @param string $placementType
     * @return AdGroupEntity
     */
    public function setPlacementType($placementType): AdGroupEntity
    {
        $this->placementType = $placementType;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * @param string $scheduleType
     * @return AdGroupEntity
     */
    public function setScheduleType($scheduleType): AdGroupEntity
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyImpression()
    {
        return $this->buyImpression;
    }

    /**
     * @param string $buyImpression
     * @return AdGroupEntity
     */
    public function setBuyImpression($buyImpression): AdGroupEntity
    {
        $this->buyImpression = $buyImpression;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    /**
     * @param array|null $languages
     * @return AdGroupEntity
     */
    public function setLanguages(?array $languages): AdGroupEntity
    {
        $this->languages = $languages;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalAction()
    {
        return $this->externalAction;
    }

    /**
     * @param string $externalAction
     * @return AdGroupEntity
     */
    public function setExternalAction($externalAction): AdGroupEntity
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeMaterialMode()
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param string $creativeMaterialMode
     * @return AdGroupEntity
     */
    public function setCreativeMaterialMode($creativeMaterialMode): AdGroupEntity
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSchedulEndTime(): \DateTime
    {
        return $this->schedulEndTime;
    }

    /**
     * @param \DateTime $schedulEndTime
     * @return AdGroupEntity
     */
    public function setSchedulEndTime(\DateTime $schedulEndTime): AdGroupEntity
    {
        $this->schedulEndTime = $schedulEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return AdGroupEntity
     */
    public function setGender($gender): AdGroupEntity
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * @param array|null $actionCategories
     * @return AdGroupEntity
     */
    public function setActionCategories(?array $actionCategories): AdGroupEntity
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptimizeGoal()
    {
        return $this->optimizeGoal;
    }

    /**
     * @param string $optimizeGoal
     * @return AdGroupEntity
     */
    public function setOptimizeGoal($optimizeGoal): AdGroupEntity
    {
        $this->optimizeGoal = $optimizeGoal;
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
     * @return AdGroupEntity
     */
    public function setBudget($budget): AdGroupEntity
    {
        $this->budget = $budget;
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
     * @return AdGroupEntity
     */
    public function setBudgetMode($budgetMode): AdGroupEntity
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param int $applicationId
     * @return AdGroupEntity
     */
    public function setApplicationId(int $applicationId): AdGroupEntity
    {
        $this->applicationId = $applicationId;
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
     * @return AdGroupEntity
     */
    public function setRaw($raw): AdGroupEntity
    {
        $this->raw = $raw;
        return $this;
    }


    /**
     * @param array $data
     */
    public function load(array $data)
    {
        $this->raw = $data;
        $this->name = $data['adgroup_name'] ?? null;
        $this->videoDownload = $data['video_download'] ?? null;
        $this->openUrl = $data['open_url'] ?? null;
        $this->actionDays = $data['action_days'] ?? 0;
        $this->conversionId = $data['conversion_id'] ?? 0;
        $this->appName = $data['app_name'] ?? null;
        $this->operationSystem = $data['operation_system'] ?? [];
        $this->appDownloadUrl = $data['app_download_url'] ?? null;
        $this->campaignId = $data['campaign_id'] ?? 0;
        $this->conversionBid = $data['conversion_bid'] ?? 0;
        $this->appType = $data['app_type'] ?? null;
        $this->appId = $data['app_id'] ?? 0;
        $this->interestCategory = $data['interest_category'] ?? [];
        $this->scheduleStartTime = new \DateTime($data['schedule_start_time']);
        $this->createTime = new \DateTime($data['create_time']);
        $this->status = $data['status'] ?? null;
        $this->id = $data['adgroup_id'] ?? 0;
        $this->advertiserId = $data['advertiser_id'] ?? 0;
        $this->modifyTime = new \DateTime($data['modify_time']);
        $this->schedulEndTime = new \DateTime($data['schedule_end_time']);
        $this->location = $data['location'] ?? [];
        $this->videoActions = $data['video_actions'] ?? [];
        $this->billingEvent = $data['billing_event'] ?? null;
        $this->isCommentDisable = $data['is_comment_disable'] ?? 0;
        $this->placement = $data['placement'] ?? [];
        $this->actionScene = $data['action_scene'] ?? [];
        $this->package = $data['package'] ?? null;
        $this->deepBidType = $data['deep_bid_type'] ?? null;
        $this->pacing = $data['pacing'] ?? null;
        $this->optStatus = $data['opt_status'] ?? null;
        $this->age = $data['age'] ?? [];
        $this->bid = $data['bid'] ?? 0;
        $this->category = $data['category'] ?? 0;
        $this->bidType = $data['bid_type'] ?? null;
        $this->placementType = $data['placement_type'] ?? null;
        $this->scheduleType = $data['schedule_type'] ?? null;
        $this->buyImpression = $data['buy_impression'] ?? null;
        $this->languages = $data['languages'] ?? [];
        $this->externalAction = $data['external_action'] ?? null;
        $this->creativeMaterialMode = $data['creative_material_mode'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->optimizeGoal = $data['optimize_goal'] ?? null;
        $this->budget = $data['budget'] ?? 0.0;
        $this->budgetMode = $data['budget_mode'] ?? null;
        $this->actionCategories = $data['action_categories'] ?? [];
        $this->applicationId = 0;
    }


}