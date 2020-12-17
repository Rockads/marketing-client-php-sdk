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
     * @return int
     */
    public function getImpressions(): int
    {
        return $this->impressions;
    }

    /**
     * @param int $impressions
     * @return ReportEntity
     */
    public function setImpressions(int $impressions): ReportEntity
    {
        $this->impressions = $impressions;
        return $this;
    }

    /**
     * @return int
     */
    public function getSwipes(): int
    {
        return $this->swipes;
    }

    /**
     * @param int $swipes
     * @return ReportEntity
     */
    public function setSwipes(int $swipes): ReportEntity
    {
        $this->swipes = $swipes;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpend(): int
    {
        return $this->spend;
    }

    /**
     * @param int $spend
     * @return ReportEntity
     */
    public function setSpend(int $spend): ReportEntity
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
    public function getIosInstalls(): int
    {
        return $this->iosInstalls;
    }

    /**
     * @param int $iosInstalls
     * @return ReportEntity
     */
    public function setIosInstalls(int $iosInstalls): ReportEntity
    {
        $this->iosInstalls = $iosInstalls;
        return $this;
    }

    /**
     * @return int
     */
    public function getAndroidInstalls(): int
    {
        return $this->androidInstalls;
    }

    /**
     * @param int $androidInstalls
     * @return ReportEntity
     */
    public function setAndroidInstalls(int $androidInstalls): ReportEntity
    {
        $this->androidInstalls = $androidInstalls;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalInstalls(): int
    {
        return $this->totalInstalls;
    }

    /**
     * @param int $totalInstalls
     * @return ReportEntity
     */
    public function setTotalInstalls(int $totalInstalls): ReportEntity
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
        $this->conversion = (new Conversion())->load($data);
        $this->day = (new \DateTime($day));
        $this->raw = $data;
        $this->adId = $adId;

        return $this;

    }

}