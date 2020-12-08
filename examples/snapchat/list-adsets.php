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

        $campaign = new \Rockads\Connect\Snapchat\Entity\CampaignEntity();
        $campaign->setId('f62c23b0-74c0-4693-a645-bc74bb8c2b46');

        $data = $client->getAdsets($campaign, $parameters);

        if ($data->getAdsets() != null) {
            foreach ($data->getAdsets() as $adset) {
                print_r($adset);
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

