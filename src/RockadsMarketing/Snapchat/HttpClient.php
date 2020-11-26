<?php

namespace Rockads\Connect\Snapchat;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Rockads\Connect\Exception\AuthorizationException;
use Rockads\Connect\Exception\ServiceException;


/**
 * Class HttpClient
 * @package Rockads\Connect\Snapchat
 */
abstract class HttpClient
{

    /**
     * @param $service
     * @return string
     */
    public function getEndpoint($service, $version = null)
    {

        $version = $version != null ? ($version . '/') : '';

        return $this->getApiEndpoint() . $version . $service;
    }

    /**
     * @param $service
     * @param $parameters
     * @return mixed
     * @throws ServiceException
     */
    public function post($service, $parameters, $version = 'v1')
    {
        try {
            $client = new Client();
            $response = $client->request('POST', $this->getEndpoint($service, $version), [
                \GuzzleHttp\RequestOptions::FORM_PARAMS => $parameters
            ]);

            return \GuzzleHttp\json_decode($response->getBody()->getContents(), true);

        } catch (RequestException $exception) {
            if ($exception->getResponse()->getStatusCode() == 401) {
                throw new AuthorizationException();
            } else {
                print_r($exception->getMessage());
                throw new ServiceException();
            }
        }
    }

    /**
     * @param $service
     * @param $parameters
     * @return mixed
     * @throws ServiceException
     */
    public function get($service, $parameters = [], $version = 'v1')
    {
        try {

            $client = new Client();
            $response = $client->request('GET', $this->getEndpoint($service, $version), [
                \GuzzleHttp\RequestOptions::QUERY => $parameters,
                \GuzzleHttp\RequestOptions::HEADERS => [
                    'Authorization' => 'Bearer ' . $this->getCredentials()->getAccessToken(),
                ],
            ]);

            return \GuzzleHttp\json_decode($response->getBody()->getContents(), true);

        } catch (RequestException $exception) {

            if ($exception->getResponse()->getStatusCode() == 401) {
                throw new AuthorizationException();
            } else {
                throw new ServiceException();
            }
        }
    }
}