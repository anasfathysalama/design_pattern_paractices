<?php

namespace Creational\Singleton;

use Exception;

class Application
{
    protected static ?self $instance = null;

    private function __construct()
    {
    }

    /**
     * @return Application
     */
    public static function getInstance(): Application
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function someOtherLogic()
    {
         return new self();
    }
}