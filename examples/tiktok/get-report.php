<?php

ini_set('display_errors', true);

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/config.php';

use Rockads\Connect\TikTok\Client;
use Rockads\Connect\TikTok\Entity\Credentials;

$credentials = new Credentials();
$credentials->setAccessToken($config['accessToken'])
    ->setAppId('')
    ->setAuthCode('')
    ->setSecret('');

$client = new Client($credentials);

$page = 1;

while (true) {

    $parameters = [
        'page' => $page,
        'page_size' => 100,
        'campaign_ids' => json_encode([1683788223585313, 1683789501076530, 1683789805956097]),
        'dimensions' => json_encode(["ID","DAY", 'COUNTRY']),
        'start_date' => '2020-01-12',
        'end_date' => '2020-12-12',
        'fields' => json_encode(['time_attr_convert_cnt','stat_cost','show_cnt','ctr','convert_cnt','conversion_rate','conversion_cost','click_cnt']),
    ];

    try {
        $data = $client->getReport('6894520063831834626', $parameters);

        if ($data->getAds() != null) {
            foreach ($data->getAds() as $ad) {
                print_r($ad);
            }
        }

        if ($data->getPagination() != null && $data->getPagination()->getNextPage() != null) {
            print_r($data->getPagination());
            $page = $data->getPagination()->getNextPage();
        } else {
            die('bitti Total Page : ' . $page);
        }

    } catch (\Rockads\Connect\Exception\ServiceException $exception) {
        die($exception->getMessage() . 'dad');
    } catch (\Exception $exception) {
        die($exception->getMessage() . 'd');
    }
}

