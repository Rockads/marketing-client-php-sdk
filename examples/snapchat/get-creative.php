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

try {

    $data = $client->getCreative('739656d8-9464-4ceb-b4d3-1adddf9bfbe4');

    print_r($data);

} catch (\Rockads\Connect\Exception\TokenExpireException $exception) {
    echo 'Refresh Token' . PHP_EOL;
    $credentials = $client->refreshToken();
    print_r($credentials);
} catch (\Exception $exception) {
    die($exception->getMessage() . 'sfdsd');
} catch (\Rockads\Connect\Exception\ServiceException $exception) {
    die($exception->getMessage() . 'sfdsd');
}


