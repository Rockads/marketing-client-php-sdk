<?php

namespace Rockads\Connect\Snapchat\Entity\Report;


/**
 * Class CampaignEntity
 * @package Rockads\Connect\Snapchat\Entity
 */
class ReportEntity
{
    /**
     * @var int
     */
    private $impressions;

    /**
     * @var int
     */
    private $swipes;
    /**
     * @var int
     */
    private $videoViews;
    /**
     * /**
     * @var int
     */
    private $viewTimeMillis;
    /**
     * @var int
     */
    private $spend;
    /**
     * @var string
     */
    private $country;
    /**
     * @var int
     */
    private $iosInstalls;
    /**
     * @var int
     */
    private $androidInstalls;
    /**
     * @var int
     */
    private $totalInstalls;

    /**
     * @var Conversion
     */
    private $conversion;

    /**
     * @var \DateTime
     */
    private $day;

    /**
     * @var ?array
     */
    private $raw;

    /**
     * @var string
     */
    private $adId;

    /**
     * @var string
     */

    private $campaignId;
    /**
     * @var string
     */
    private $adAccountId;
    /**
     * @var int
     */
    private $quartile1;
    /**
     * @var int
     */
    private $quartile2;
    /**
     * @var int
     */
    private $quartile3;


    /**
     * @var int
     */
    private $customEvent1;

    /**
     * @var int
     */
    private $customEvent2;

    /**
     * @var int
     */
    private $customEvent3;

    /**
     * @var int
     */
    private $customEvent4;

    /**
     * @var int
     */
    private $customEvent5;

    /**
     * @return int
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * @param int $impressions
     * @return ReportEntity
     */
    public function setImpressions($impressions): ReportEntity
    {
        $this->impressions = $impressions;
        return $this;
    }

    /**
     * @return int
     */
    public function getSwipes()
    {
        return $this->swipes;
    }

    /**
     * @param int $swipes
     * @return ReportEntity
     */
    public function setSwipes($swipes): ReportEntity
    {
        $this->swipes = $swipes;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpend()
    {
        return $this->spend;
    }

    /**
     * @param int $spend
     * @return ReportEntity
     */
    public function setSpend($spend): ReportEntity
    {
        $this->spend = $spend;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return ReportEntity
     */
    public function setCountry(string $country): ReportEntity
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosInstalls()
    {
        return $this->iosInstalls;
    }

    /**
     * @param int $iosInstalls
     * @return ReportEntity
     */
    public function setIosInstalls($iosInstalls): ReportEntity
    {
        $this->iosInstalls = $iosInstalls;
        return $this;
    }

    /**
     * @return int
     */
    public function getAndroidInstalls()
    {
        return $this->androidInstalls;
    }

    /**
     * @param int $androidInstalls
     * @return ReportEntity
     */
    public function setAndroidInstalls($androidInstalls): ReportEntity
    {
        $this->androidInstalls = $androidInstalls;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalInstalls()
    {
        return $this->totalInstalls;
    }

    /**
     * @param int $totalInstalls
     * @return ReportEntity
     */
    public function setTotalInstalls($totalInstalls): ReportEntity
    {
        $this->totalInstalls = $totalInstalls;
        return $this;
    }

    /**
     * @return Conversion
     */
    public function getConversion(): Conversion
    {
        return $this->conversion;
    }

    /**
     * @param Conversion $conversion
     * @return ReportEntity
     */
    public function setConversion(Conversion $conversion): ReportEntity
    {
        $this->conversion = $conversion;
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
     * @return ReportEntity
     */
    public function setRaw($raw): ReportEntity
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDay(): \DateTime
    {
        return $this->day;
    }

    /**
     * @param \DateTime $day
     * @return ReportEntity
     */
    public function setDay(\DateTime $day): ReportEntity
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param string $adId
     * @return ReportEntity
     */
    public function setAdId($adId): ReportEntity
    {
        $this->adId = $adId;
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
     * @return ReportEntity
     */
    public function setCampaignId($campaignId): ReportEntity
    {
        $this->campaignId = $campaignId;
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
     * @return ReportEntity
     */
    public function setAdAccountId($adAccountId): ReportEntity
    {
        $this->adAccountId = $adAccountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoViews()
    {
        return $this->videoViews;
    }

    /**
     * @param int $videoViews
     * @return ReportEntity
     */
    public function setVideoViews($videoViews): ReportEntity
    {
        $this->videoViews = $videoViews;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewTimeMillis()
    {
        return $this->viewTimeMillis;
    }

    /**
     * @param int $viewTimeMillis
     * @return ReportEntity
     */
    public function setViewTimeMillis($viewTimeMillis): ReportEntity
    {
        $this->viewTimeMillis = $viewTimeMillis;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuartile1()
    {
        return $this->quartile1;
    }

    /**
     * @param int $quartile1
     * @return ReportEntity
     */
    public function setQuartile1($quartile1): ReportEntity
    {
        $this->quartile1 = $quartile1;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuartile2()
    {
        return $this->quartile2;
    }

    /**
     * @param int $quartile2
     * @return ReportEntity
     */
    public function setQuartile2($quartile2): ReportEntity
    {
        $this->quartile2 = $quartile2;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuartile3()
    {
        return $this->quartile3;
    }

    /**
     * @param int $quartile3
     * @return ReportEntity
     */
    public function setQuartile3($quartile3): ReportEntity
    {
        $this->quartile3 = $quartile3;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomEvent1()
    {
        return $this->customEvent1;
    }

    /**
     * @param int $customEvent1
     * @return ReportEntity
     */
    public function setCustomEvent1($customEvent1): ReportEntity
    {
        $this->customEvent1 = $customEvent1;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomEvent2()
    {
        return $this->customEvent2;
    }

    /**
     * @param int $customEvent2
     * @return ReportEntity
     */
    public function setCustomEvent2($customEvent2): ReportEntity
    {
        $this->customEvent2 = $customEvent2;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomEvent3()
    {
        return $this->customEvent3;
    }

    /**
     * @param int $customEvent3
     * @return ReportEntity
     */
    public function setCustomEvent3($customEvent3): ReportEntity
    {
        $this->customEvent3 = $customEvent3;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomEvent4()
    {
        return $this->customEvent4;
    }

    /**
     * @param int $customEvent4
     * @return ReportEntity
     */
    public function setCustomEvent4($customEvent4): ReportEntity
    {
        $this->customEvent4 = $customEvent4;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomEvent5()
    {
        return $this->customEvent5;
    }

    /**
     * @param int $customEvent5
     * @return ReportEntity
     */
    public function setCustomEvent5($customEvent5): ReportEntity
    {
        $this->customEvent5 = $customEvent5;
        return $this;
    }


    /**
     * @param $data
     * @param $day
     * @param $adId
     * @return $this
     * @throws \Exception
     */
    public function load($data, $day, $adId)
    {
        $this->impressions = isset($data['impressions']) ? $data['impressions'] : 0;
        $this->swipes = isset($data['swipes']) ? $data['swipes'] : 0;
        $this->spend = isset($data['spend']) ? $data['spend'] / 100000 : 0;
        $this->country = isset($data['country']) ? strtoupper($data['country']) : null;
        $this->iosInstalls = isset($data['ios_installs']) ? $data['ios_installs'] : 0;
        $this->androidInstalls = isset($data['android_installs']) ? $data['android_installs'] : 0;
        $this->totalInstalls = isset($data['total_installs']) ? $data['total_installs'] : 0;
        $this->videoViews = $data['videoViews'] ?? 0;
        $this->quartile1 = $data['quartile_1'] ?? 0;
        $this->quartile2 = $data['quartile_2'] ?? 0;
        $this->quartile3 = $data['quartile_3'] ?? 0;
        $this->viewTimeMillis = $data['view_time_millis'] ?? 0;
        $this->conversion = (new Conversion())->load($data);
        $this->day = (new \DateTime($day));
        $this->raw = $data;
        $this->adId = $adId;
        $this->customEvent1 = $data['custom_event_1'] ?? 0;
        $this->customEvent2 = $data['custom_event_2'] ?? 0;
        $this->customEvent3 = $data['custom_event_3'] ?? 0;
        $this->customEvent4 = $data['custom_event_4'] ?? 0;
        $this->customEvent5 = $data['custom_event_5'] ?? 0;

        return $this;

    }

}