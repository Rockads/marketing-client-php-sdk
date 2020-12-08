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
        $data = $client->getCampaigns('50188cbb-b103-4bf4-80d3-84f4b00b180d', $parameters);

        if ($data->getCampaigns() != null) {
            foreach ($data->getCampaigns() as $campaign) {
                print_r($campaign);
            }
        }

        if ($data->getPagination()->getNext()) {
            $cursor = $data->getPagination()->getNext();
        } else {
            echo 'Bitti!' . PHP_EOL;
            break;
        }
    } catch (\Rockads\Connect\Exception\TokenExpireException $exception) {
        echo 'Refreh Token' . PHP_EOL;
        $credentials = $client->refreshToken();
        print_r($credentials);
        $client = new Client($credentials);
    } catch (\Exception $exception) {

    }
}

