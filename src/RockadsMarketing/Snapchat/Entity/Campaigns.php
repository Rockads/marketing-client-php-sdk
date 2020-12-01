<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class CampaignEntity
 * @package Rockads\Connect\Snapchat\Entity
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
     * @param array $campaigns
     */
    public function setCampaigns(?array $campaigns)
    {
        $campaignList = [];
        foreach ($campaigns['campaigns'] as $campaign) {
            $entity = new CampaignEntity();
            $entity->load($campaign['campaign']);
            $campaignList[] = $entity;
        }

        $this->campaigns = $campaignList;

    }


}