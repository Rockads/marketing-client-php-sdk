<?php

namespace Rockads\Connect\Snapchat\Entity;


/**
 * Class Pagination
 * @package Rockads\Connect\Snapchat\Entity
 */
class Pagination
{

    /**
     * @var string
     */
    private $next;


    /**
     * @var string
     */
    private $prev;

    /**
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param string $next
     */
    public function setNext($next)
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * @param string $prev
     */
    public function setPrev($prev)
    {
        $this->prev = $prev;
        return $this;
    }

    /**
     * @param $pagination
     * @return $this
     */
    public function load($pagination)
    {
        if (isset($pagination['next_link'])) {
            $this->next = $this->parseUrl($pagination['next_link'], 'cursor');
        }

        if (isset($pagination['prev_link'])) {
            $this->prev = $this->parseUrl($pagination['prev_link'], 'cursor');
        }

        return $this;
    }

    /**
     * @param $url
     * @param $parameter
     * @return mixed|null
     */
    private function parseUrl($url, $parameter)
    {
        $parts = parse_url($url);

        if (isset($parts['query'])) {
            parse_str($parts['query'], $query);
            return isset($query[$parameter]) ? $query[$parameter] : null;
        } else {
            return null;
        }

    }

}