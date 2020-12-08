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

    $fields = [
        'impressions',
        'spend',
        'swipes',
        'total_installs',
        'android_installs',
        'ios_installs',
        'conversion_purchases',
        'conversion_purchases_value',
        'conversion_save',
        'conversion_start_checkout',
        'conversion_add_cart',
        'conversion_view_content',
        'conversion_add_billing',
        'conversion_sign_ups',
        'conversion_searches',
        'conversion_level_completes',
        'conversion_app_opens',
        'conversion_page_views',
        'conversion_subscribe',
        'conversion_ad_click',
        'conversion_ad_view',
        'conversion_complete_tutorial',
        'conversion_invite',
        'conversion_login',
        'conversion_share',
        'conversion_reserve',
        'conversion_achievement_unlocked',
        'conversion_add_to_wishlist',
        'conversion_spend_credits',
        'conversion_rate',
        'conversion_start_trial',
        'conversion_list_view',
        'custom_event_1',
        'custom_event_2',
        'custom_event_3',
        'custom_event_4',
        'custom_event_5',
    ];

    $parameters = [
        'limit' => 10,
        'cursor' => $cursor,
        'granularity' => 'TOTAL',
        'breakdown' => 'DAY',
        'report_dimension' => 'country',
        'swipe_up_attribution_window' => '28_DAY',
        'view_attribution_window' => '28_DAY',
        'fields' => implode(',', $fields),
    ];

    try {

        $data = $client->getReport('59902316-f527-48ab-9b2b-95570b160070', $parameters);

        if ($data->getreports() != null) {
            foreach ($data->getreports() as $report) {
                print_r($report);
            }
        }

    } catch (\Rockads\Connect\Exception\TokenExpireException $exception) {
        echo 'Refreh Token' . PHP_EOL;
        $credentials = $client->refreshToken();
        print_r($credentials);
        $client = new Client($credentials);
    } catch (\Exception $exception) {
        die($exception->getMessage() . 'sfdsd');
    } catch (\Rockads\Connect\Exception\ServiceException $exception) {
        die($exception->getMessage() . 'sfdsd');
    }
}

