<?php

namespace samplephp\controller;

require_once dirname(__DIR__) . "/vendor/autoload.php";

use samplephp\model\Guerrier;

class GuerrierController {
    private static $INSTANCE;

    private function __construct() { }

    public static function getInstance(): GuerrierController {
        if(empty(self::$INSTANCE)) {
            self::$INSTANCE = new GuerrierController();
        }

        return self::$INSTANCE;
    }

    public function createGuerrier(): Guerrier {
        return new Guerrier(40, 20, 5);
    }
}