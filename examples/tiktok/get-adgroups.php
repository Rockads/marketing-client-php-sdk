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
        'page_size' => 50,
    ];

    try {
        $data = $client->getAdGroups('6894520063831834626', $parameters);

        if ($data->getAdGroups() != null) {
            foreach ($data->getAdGroups() as $group) {
                print_r($group);
            }
        }

        if ($data->getPagination() != null && $data->getPagination()->getNextPage() != null) {
            print_r($data->getPagination());
            $page = $data->getPagination()->getNextPage();
        } else {
            die('bitti Total Page : ' . $page);
        }

    } catch (\Rockads\Connect\Exception\ServiceException $exception) {
        die($exception->getMessage().'dad');
    } catch (\Exception $exception) {
        die($exception->getMessage().'d');
    }
}

