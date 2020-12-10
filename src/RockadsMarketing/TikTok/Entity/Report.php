<?php

namespace Rockads\Connect\TikTok\Entity;

/**
 * Class Report
 * @package Rockads\Connect\TikTok\Entity
 */
class Report
{
    /**
     * @var Pagination
     */
    private $pagination = null;

    /**
     * @var ReportEntity[]
     */
    private $report = [];

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
     * @return ReportEntity[]
     */
    public function getReport(): ?array
    {
        return $this->report;
    }

    /**
     * @param array|null $ads
     * @return $this|null
     */
    public function load(?array $report)
    {

        if ($report['code'] == 0) {
            $pagination = new Pagination();
            $pagination->load($report['data']['page_info']);

            $this->pagination = $pagination;

            $reportList = [];
            foreach ($report['data']['list'] as $ad) {
                $entity = new ReportEntity();
                $entity->load($ad);
                $reportList[] = $entity;
            }

            $this->report = $reportList;

            return $this;

        }

        return null;

    }


}