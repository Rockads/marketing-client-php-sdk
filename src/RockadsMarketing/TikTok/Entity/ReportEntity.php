<?php

namespace Rockads\Connect\TikTok\Entity;


/**
 * Class ReportEntity
 * @package Rockads\Connect\TikTok\Entity
 */
class ReportEntity
{
    /**
     * @var int
     */
    private $campaignId;

    /**
     * @var int
     */
    private $adId;

    /**
     * @var string
     */
    private $country;

    /**
     * @var ?\DateTime
     */
    private $day;

    /**
     * @var float
     */
    private $ctr;
    /**
     * @var float
     */
    private $conversionCost;
    /**
     * @var int
     */
    private $clickCount;
    /**
     * @var float
     */
    private $conversionRate;
    /**
     * @var float
     */
    private $statCost;
    /**
     * @var integer
     */
    private $timeAttrConvertCount;
    /**
     * @var integer
     */
    private $convertCount;
    /**
     * @var integer
     */
    private $showCount;
    /**
     * @var ?array
     */
    private $raw;

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return ReportEntity
     */
    public function setCountry($country): ReportEntity
    {
        $this->country = $country;
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
     * @return float
     */
    public function getctr()
    {
        return $this->ctr;
    }

    /**
     * @param float $ctr
     * @return ReportEntity
     */
    public function setctr($ctr): ReportEntity
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionCost()
    {
        return $this->conversionCost;
    }

    /**
     * @param float $conversionCost
     * @return ReportEntity
     */
    public function setConversionCost($conversionCost): ReportEntity
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * @param int $clickCount
     * @return ReportEntity
     */
    public function setClickCount($clickCount): ReportEntity
    {
        $this->clickCount = $clickCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * @param float $conversionRate
     * @return ReportEntity
     */
    public function setConversionRate($conversionRate): ReportEntity
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost()
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return ReportEntity
     */
    public function setStatCost($statCost): ReportEntity
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return int
     */
    public function gettimeAttrConvertCount()
    {
        return $this->timeAttrConvertCount;
    }

    /**
     * @param int $timeAttrConvertCount
     * @return ReportEntity
     */
    public function settimeAttrConvertCount($timeAttrConvertCount): ReportEntity
    {
        $this->timeAttrConvertCount = $timeAttrConvertCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertCount()
    {
        return $this->convertCount;
    }

    /**
     * @param int $convertCount
     * @return ReportEntity
     */
    public function setConvertCount($convertCount): ReportEntity
    {
        $this->convertCount = $convertCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowCount()
    {
        return $this->showCount;
    }

    /**
     * @param int $showCount
     * @return ReportEntity
     */
    public function setShowCount($showCount): ReportEntity
    {
        $this->showCount = $showCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return ReportEntity
     */
    public function setAdId($adId): ReportEntity
    {
        $this->adId = $adId;
        return $this;
    }


    public function load(array $data)
    {

        $this->raw = $data;
        $this->adId = $data['dimensions']['ad_id'] ?? 0;
        $this->country = $data['dimensions']['country_id']?? null;
        $this->day = isset($data['dimensions']['stat_datetime']) ? new \DateTime($data['dimensions']['stat_datetime']) : null;
        $this->ctr = $data['metrics']['ctr'] ?? 0.0;
        $this->conversionCost = $data['metrics']['conversion_cost'] ?? 0.0;
        $this->clickCount = $data['metrics']['click_cnt'] ?? 0;
        $this->conversionRate = $data['metrics']['conversion_rate'] ?? 0.0;
        $this->statCost = $data['metrics']['stat_cost'] ?? 0.0;
        $this->timeAttrConvertCount = $data['metrics']['time_attr_convert_cnt'] ?? 0;
        $this->convertCount = $data['metrics']['convert_cnt'] ?? 0;
        $this->showCount = $data['metrics']['show_cnt'] ?? 0;

    }

}