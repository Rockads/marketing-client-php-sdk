<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class Pagination
 * @package Rockads\Connect\Snapchat\Entity
 */
class Pagination
{

    /**
     * @var integer
     */
    private $totalItems;

    /**
     * @var integer
     */
    private $totalPages;

    /**
     * @var integer
     */
    private $currentPage;

    /**
     * @var integer
     */
    private $nextPage;

    /**
     * @var integer
     */
    private $prevPage;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     * @return Pagination
     */
    public function setTotalItems($totalItems): Pagination
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return Pagination
     */
    public function setTotalPages($totalPages): Pagination
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param int $currentPage
     * @return Pagination
     */
    public function setCurrentPage($currentPage): Pagination
    {
        $this->currentPage = $currentPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextPage()
    {
        return $this->nextPage;
    }

    /**
     * @param int $nextPage
     * @return Pagination
     */
    public function setNextPage($nextPage): Pagination
    {
        $this->nextPage = $nextPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrevPage()
    {
        return $this->prevPage;
    }

    /**
     * @param int $prevPage
     * @return Pagination
     */
    public function setPrevPage($prevPage): Pagination
    {
        $this->prevPage = $prevPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Pagination
     */
    public function setLimit($limit): Pagination
    {
        $this->limit = $limit;
        return $this;
    }


    /**
     * @param $pagination
     * @return $this
     */
    public function load($pagination)
    {
        $this->totalPages = $pagination['total_page'] ?? 0;
        $this->totalItems = $pagination['total_number'] ?? 0;
        $this->limit = $pagination['page_size'] ?? 0;
        $this->currentPage = $pagination['page'] ?? 0;

        if ($this->currentPage > 1) {
            $this->prevPage = $this->currentPage - 1;
        } else {
            $this->prevPage = null;
        }

        if ($this->currentPage < $this->totalPages) {
            $this->nextPage = $this->currentPage + 1;
        } else {
            $this->nextPage = null;
        }

        return $this;

    }

}