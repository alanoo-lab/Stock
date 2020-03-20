<?php

namespace samplephp\controller;

require_once dirname(__DIR__) . "/vendor/autoload.php";

use samplephp\model\produit;

class ProduitController {
    private static $INSTANCE;

    private function __construct() { }

    public static function getInstance(): ProduitController {
        if(empty(self::$INSTANCE)) {
            self::$INSTANCE = new ProduitController();
        }

        return self::$INSTANCE;
    }

    public function createProduit(): Produit {
        return new Produit(33, 'test', 20, 10, 'XL', 'ROUGE', 1000);
    }
}
