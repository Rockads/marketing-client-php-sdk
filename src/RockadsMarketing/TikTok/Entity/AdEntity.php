<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class AdEntity
 * @package Rockads\Connect\TikTok\Entity
 */
class AdEntity
{

    /**
     * @var string
     */
    private $openUrl;

    /**
     * @var string
     */
    private $appName;
    /**
     * @var string
     */
    private $vastMoat;
    /**
     * @var string
     */
    private $playableUrl;
    /**
     * @var string
     */
    private $landing_pageUrls;
    /**
     * @var string
     */
    private $profileImage;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var int
     */
    private $isAco;

    /**
     * @var string
     */
    private $imageMode;

    /**
     * @var string
     */
    private $campaignName;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $clickTrackingUrl;

    /**
     * @var int
     */
    private $adGroupId;

    /**
     * @var string
     */
    private $displayName;
    /**
     * @var string
     */
    private $adGroupName;

    /**
     * @var ?array
     */
    private $imageIds;

    /**
     * @var string
     */
    private $impressionTrackingUrl;

    /**
     * @var string
     */
    private $optStatus;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $openUrlType;

    /**
     * @var string
     */
    private $adText;

    /**
     * @var string
     */
    private $advertiserId;

    /**
     * @var string
     */
    private $isCreativeAuthorized;

    /**
     * @var string
     */
    private $adTexts;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $externalAction;

    /**
     * @var string
     */
    private $callToAction;
    /**
     * @var string
     */
    private $videoId;
    /**
     * @var string
     */
    private $landingPageUrl;
    /**
     * @var \DateTime
     */
    private $modifyTime;

    /**
     * @return string
     */
    public function getOpenUrl()
    {
        return $this->openUrl;
    }

    /**
     * @param string $openUrl
     * @return AdEntity
     */
    public function setOpenUrl($openUrl): AdEntity
    {
        $this->openUrl = $openUrl;
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
     * @return AdEntity
     */
    public function setAppName($appName): AdEntity
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVastMoat()
    {
        return $this->vastMoat;
    }

    /**
     * @param string $vastMoat
     * @return AdEntity
     */
    public function setVastMoat($vastMoat): AdEntity
    {
        $this->vastMoat = $vastMoat;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableUrl()
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return AdEntity
     */
    public function setPlayableUrl($playableUrl): AdEntity
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getLandingPageUrls()
    {
        return $this->landing_pageUrls;
    }

    /**
     * @param string $landing_pageUrls
     * @return AdEntity
     */
    public function setLandingPageUrls($landing_pageUrls): AdEntity
    {
        $this->landing_pageUrls = $landing_pageUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * @param string $profileImage
     * @return AdEntity
     */
    public function setProfileImage($profileImage): AdEntity
    {
        $this->profileImage = $profileImage;
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
     * @return AdEntity
     */
    public function setCampaignId($campaignId): AdEntity
    {
        $this->campaignId = $campaignId;
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
     * @return AdEntity
     */
    public function setCreateTime(\DateTime $createTime): AdEntity
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsAco()
    {
        return $this->isAco;
    }

    /**
     * @param int $isAco
     * @return AdEntity
     */
    public function setIsAco($isAco): AdEntity
    {
        $this->isAco = $isAco;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageMode()
    {
        return $this->imageMode;
    }

    /**
     * @param string $imageMode
     * @return AdEntity
     */
    public function setImageMode($imageMode): AdEntity
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return AdEntity
     */
    public function setCampaignName($campaignName): AdEntity
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AdEntity
     */
    public function setId($id): AdEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getClickTrackingUrl()
    {
        return $this->clickTrackingUrl;
    }

    /**
     * @param string $clickTrackingUrl
     * @return AdEntity
     */
    public function setClickTrackingUrl($clickTrackingUrl): AdEntity
    {
        $this->clickTrackingUrl = $clickTrackingUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return AdEntity
     */
    public function setAdGroupId($adGroupId): AdEntity
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return AdEntity
     */
    public function setDisplayName($displayName): AdEntity
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
        return $this->adGroupName;
    }

    /**
     * @param string $adGroupName
     * @return AdEntity
     */
    public function setAdGroupName($adGroupName): AdEntity
    {
        $this->adGroupName = $adGroupName;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getImageIds()
    {
        return $this->imageIds;
    }

    /**
     * @param array|null $imageIds
     * @return AdEntity
     */
    public function setImageIds($imageIds): AdEntity
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getImpressionTrackingUrl()
    {
        return $this->impressionTrackingUrl;
    }

    /**
     * @param string $impressionTrackingUrl
     * @return AdEntity
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl): AdEntity
    {
        $this->impressionTrackingUrl = $impressionTrackingUrl;
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
     * @return AdEntity
     */
    public function setOptStatus($optStatus): AdEntity
    {
        $this->optStatus = $optStatus;
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
     * @return AdEntity
     */
    public function setStatus($status): AdEntity
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenUrlType()
    {
        return $this->openUrlType;
    }

    /**
     * @param string $openUrlType
     * @return AdEntity
     */
    public function setOpenUrlType($openUrlType): AdEntity
    {
        $this->openUrlType = $openUrlType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdText()
    {
        return $this->adText;
    }

    /**
     * @param string $adText
     * @return AdEntity
     */
    public function setAdText($adText): AdEntity
    {
        $this->adText = $adText;
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
     * @return AdEntity
     */
    public function setAdvertiserId($advertiserId): AdEntity
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsCreativeAuthorized()
    {
        return $this->isCreativeAuthorized;
    }

    /**
     * @param string $isCreativeAuthorized
     * @return AdEntity
     */
    public function setIsCreativeAuthorized($isCreativeAuthorized): AdEntity
    {
        $this->isCreativeAuthorized = $isCreativeAuthorized;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdTexts()
    {
        return $this->adTexts;
    }

    /**
     * @param string $adTexts
     * @return AdEntity
     */
    public function setAdTexts($adTexts): AdEntity
    {
        $this->adTexts = $adTexts;
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
     * @return AdEntity
     */
    public function setName($name): AdEntity
    {
        $this->name = $name;
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
     * @return AdEntity
     */
    public function setExternalAction($externalAction): AdEntity
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallToAction()
    {
        return $this->callToAction;
    }

    /**
     * @param string $callToAction
     * @return AdEntity
     */
    public function setCallToAction($callToAction): AdEntity
    {
        $this->callToAction = $callToAction;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return AdEntity
     */
    public function setVideoId($videoId): AdEntity
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->landingPageUrl;
    }

    /**
     * @param string $landingPageUrl
     * @return AdEntity
     */
    public function setLandingPageUrl($landingPageUrl): AdEntity
    {
        $this->landingPageUrl = $landingPageUrl;
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
     * @return AdEntity
     */
    public function setModifyTime(\DateTime $modifyTime): AdEntity
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }


    /**
     * @param array $data
     */
    public function load(array $data)
    {
        $this->openUrl = $data['open_url'] ?? null;
        $this->appName = $data['app_name'] ?? null;
        $this->vastMoat = $data['vast_moat'] ?? null;
        $this->playableUrl = $data['playable_url'] ?? null;
        $this->landing_pageUrls = $data['landing_page_urls'] ?? null;
        $this->profileImage = $data['profile_image'] ?? null;
        $this->campaignId = $data['campaign_id'] ?? 0;
        $this->createTime = new \DateTime($data['create_time']);
        $this->isAco = $data['is_aco'] ?? 0;
        $this->imageMode = $data['image_mode'] ?? null;
        $this->campaignName = $data['campaign_name'] ?? null;
        $this->id = $data['ad_id'] ?? 0;
        $this->adGroupId = $data['adgroup_id'] ?? 0;
        $this->clickTrackingUrl = $data['click_tracking_url'] ?? null;
        $this->displayName = $data['display_name'] ?? null;
        $this->adGroupName = $data['adgroup_name'] ?? null;
        $this->imageIds = $data['image_ids'] ?? [];
        $this->impressionTrackingUrl = $data['impression_tracking_url'] ?? null;
        $this->optStatus = $data['opt_status'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->openUrlType = $data['open_url_type'] ?? null;
        $this->adText = $data['ad_text'] ?? null;
        $this->advertiserId = $data['advertiser_id'] ?? 0;
        $this->isCreativeAuthorized = $data['is_creative_authorized'] ?? null;
        $this->adText = $data['ad_texts'] ?? null;
        $this->name = $data['ad_name'] ?? null;
        $this->externalAction = $data['external_action'] ?? null;
        $this->callToAction = $data['call_to_action'] ?? null;
        $this->videoId = $data['video_id'] ?? null;
        $this->landingPageUrl = $data['landing_page_url'] ?? null;
        $this->modifyTime = new \DateTime($data['modify_time']);
    }


}