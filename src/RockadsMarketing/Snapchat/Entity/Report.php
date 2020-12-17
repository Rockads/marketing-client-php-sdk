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
    public function getReports(): ?array
    {
        return $this->reports;
    }


    /**
     * @param array|null $reports
     * @param $adId
     */
    public function setReports(?array $reports, $adId)
    {
        $reportList = [];

        if (isset($reports['timeseries_stats'][0]['timeseries_stat']['timeseries'])) {
            foreach ($reports['timeseries_stats'][0]['timeseries_stat']['timeseries'] as $reportSeries) {
                foreach ($reportSeries['dimension_stats'] as $report) {
                    $entity = new ReportEntity();
                    $entity->load($report, $reportSeries['start_time'], $adId);
                    $reportList[] = $entity;
                }

            }

        }

        $this->reports = $reportList;

    }


}