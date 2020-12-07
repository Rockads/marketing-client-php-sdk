<?php

namespace Rockads\Connect\Snapchat\Entity;


use Rockads\Connect\Snapchat\Entity\Report\ReportEntity;

/**
 * Class Report
 * @package Rockads\Connect\Snapchat\Entity
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
    private $reports = [];

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
    public function getreports(): ?array
    {
        return $this->reports;
    }

    /**
     * @param array $reports
     */
    public function setReports(?array $reports)
    {
        $reportList = [];

        if (isset($reports['total_stats'][0]['total_stat']['dimension_stats'])) {
            foreach ($reports['total_stats'][0]['total_stat']['dimension_stats'] as $report) {
                $entity = new ReportEntity();
                $entity->load($report);
                $reportList[] = $entity;
            }
        }

        $this->reports = $reportList;

    }


}