<?php

declare(strict_types=1);

final class Singleton
{
    private static ?Singleton $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): Singleton
    {
        if(!isset(self::$instance)){
            self::$instance = new static();
        }

        return self::$instance;
    }

}