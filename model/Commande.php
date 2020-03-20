<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Commande {
    private $id_a;
    private $id_p;
    private $ref_com;

    public function __construct(int $id_a, int $id_p, int $ref_com) {
        $this->id = $id_a;
        $this->id = $id_p;
        $this->reference = $ref_com;
    }

    public function getIda(): int {
        return $this->ida;
    }

    public function getIdp(): int {
        return $this->idp;
    }

    public function getRef(): int {
        return $this->reference;
    }

    public function setIda(int $id_a) {
        $this->ida = $id_a;
    }

    public function setIdp(int $id_p) {
        $this->idp = $id_p;
    }

    public function setRef(int $ref_com) {
        $this->reference = $ref_com;
    }
}
