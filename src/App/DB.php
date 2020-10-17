<?php


namespace App;

class DB
{
    private static $instance;

    private final function __construct()
    {

    }

    public static function getInstance(): DB
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function test(): void
    {
        echo 'running...';
    }
}