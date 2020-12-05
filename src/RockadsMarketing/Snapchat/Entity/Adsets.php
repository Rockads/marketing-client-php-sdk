<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class Adsets
 * @package Rockads\Connect\Snapchat\Entity
 */
class Adsets
{
    /**
     * @var Pagination
     */
    private $pagination = null;

    /**
     * @var AdsetEntity[]
     */
    private $adsets = [];

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
     * @return AdsetEntity[]
     */
    public function getAdsets(): ?array
    {
        return $this->adsets;
    }

    /**
     * @param array $adsets
     */
    public function setAdsets(?array $adsets)
    {
        $adsetList = [];
        foreach ($adsets['adsquads'] as $adset) {
            $entity = new AdsetEntity();
            $entity->load($adset['adsquad']);
            $adsetList[] = $entity;
        }

        $this->adsets = $adsetList;

    }


}