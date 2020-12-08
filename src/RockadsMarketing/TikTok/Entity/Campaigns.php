<?php

namespace Rockads\Connect\TikTok\Entity;


/**
 * Class CampaignEntity
 * @package Rockads\Connect\TikTok\Entity
 */
class Campaigns
{
    /**
     * @var Pagination
     */
    private $pagination = null;

    /**
     * @var CampaignEntity[]
     */
    private $campaigns = [];

    /**
     * @return Pagination
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     */
    public function setPagination(?Pagination $pagination)
    {
        $this->pagination = $pagination;
    }


    /**
     * @return CampaignEntity[]
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }


    /**
     * @param array|null $campaigns
     * @return $this
     */
    public function load(?array $campaigns)
    {

        if ($campaigns['code'] == 0) {
            $pagination = new Pagination();
            $pagination->load($campaigns['data']['page_info']);

            $this->pagination = $pagination;

            $campaignList = [];
            foreach ($campaigns['data']['list'] as $campaign) {
                $entity = new CampaignEntity();
                $entity->load($campaign);
                $campaignList[] = $entity;
            }

            $this->campaigns = $campaignList;

            return $this;

        }

        return null;

    }


}