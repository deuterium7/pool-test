<?php

namespace AlexanderZabornyi\PoolTest;

class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Реверс строки
     *
     * @param string $text
     *
     * @return string
     */
    public function run(string $text)
    {
        return strrev($text);
    }
}