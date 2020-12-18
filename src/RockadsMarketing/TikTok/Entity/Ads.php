<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class Ads
 * @package Rockads\Connect\TikTok\Entity
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
     * @param array|null $ads
     * @return $this|null
     */
    public function load(?array $ads)
    {

        if ($ads['code'] == 0 && isset($ads['data']['list']) && !empty($ads['data']['list'])) {
            $pagination = new Pagination();
            $pagination->load($ads['data']['page_info']);

            $this->pagination = $pagination;

            $adsList = [];
            foreach ($ads['data']['list'] as $ad) {
                $entity = new AdEntity();
                $entity->load($ad);
                $adsList[] = $entity;
            }

            $this->ads = $adsList;

            return $this;

        }

        return null;

    }


}