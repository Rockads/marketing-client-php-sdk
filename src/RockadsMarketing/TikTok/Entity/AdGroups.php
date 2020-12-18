<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class AdGroups
 * @package Rockads\Connect\TikTok\Entity
 */
class AdGroups
{
    /**
     * @var Pagination
     */
    private $pagination = null;

    /**
     * @var AdGroupEntity[]
     */
    private $adGroups = [];

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
     * @return AdGroupEntity[]
     */
    public function getAdGroups(): ?array
    {
        return $this->adGroups;
    }


    /**
     * @param array|null $campaigns
     * @return $this
     */
    public function load(?array $adGroups)
    {

        if ($adGroups['code'] == 0 && isset($adGroups['data']['list']) && !empty($adGroups['data']['list'])) {
            $pagination = new Pagination();
            $pagination->load($adGroups['data']['page_info']);

            $this->pagination = $pagination;

            $adGroupList = [];
            foreach ($adGroups['data']['list'] as $group) {
                $entity = new AdGroupEntity();
                $entity->load($group);
                $adGroupList[] = $entity;
            }

            $this->adGroups = $adGroupList;

            return $this;

        }

        return null;

    }


}