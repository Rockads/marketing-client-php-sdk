<?php

ini_set('display_errors', true);

require __DIR__ . '/../../vendor/autoload.php';

$config = require __DIR__ . '/config.php';

use Rockads\Connect\Snapchat\Client;
use Rockads\Connect\Snapchat\Entity\Credentials;

$credentials = new Credentials();
$credentials->setAccessToken($config['accessToken'])
    ->setRefreshToken($config['refreshToken'])
    ->setClientId($config['clientId'])
    ->setClientSecret($config['clientSecret']);

$client = new Client($credentials);

$cursor = null;

while (true) {

    $parameters = [
        'limit' => 10,
        'cursor' => $cursor,
    ];

    try {

        $adset = new \Rockads\Connect\Snapchat\Entity\AdsetEntity();
        $adset->setId('f75a56c3-2772-42db-8b18-e06fdbb6229d');

        $data = $client->getAds($adset, $parameters);

        if ($data->getAds() != null) {
            foreach ($data->getAds() as $ad) {
                print_r($ad);
            }
        }

        if ($data->getPagination()->getNext()) {
            $cursor = $data->getPagination()->getNext();
        } else {
            echo 'Bitti!' . PHP_EOL;
            break;
        }
    } catch (\Rockads\Connect\Exception\TokenExpireException $exception) {

        echo 'Refresh Token' . PHP_EOL;

        $credentials = $client->refreshToken();

        print_r($credentials);

        $client = new Client($credentials);

    } catch (\Exception $exception) {

    }
}

