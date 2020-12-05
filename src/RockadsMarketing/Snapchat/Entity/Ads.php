<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class Ads
 * @package Rockads\Connect\Snapchat\Entity
 */
class Ads
{
    /**
     * @var Pagination
     */
    private $pagination = null;

    /**
     * @var AdEntity[]
     */
    private $ads = [];

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
     * @return AdEntity[]
     */
    public function getAds(): ?array
    {
        return $this->ads;
    }

    /**
     * @param array $ads
     */
    public function setAds(?array $ads)
    {
        $adList = [];
        foreach ($ads['ads'] as $ad) {
            $entity = new AdEntity();
            $entity->load($ad['ad']);
            $adList[] = $entity;
        }

        $this->ads = $adList;

    }

}