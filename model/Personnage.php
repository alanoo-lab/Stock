<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Personnage {
    private $sante;
    private $force;

    public function __construct(int $sante, int $force) {
        $this->sante = $sante;
        $this->force = $force;
    }

    public function getSante(): int {
        return $this->sante;
    }

    public function getForce(): int {
        return $this->force;
    }

    public function setSante(int $sante) {
        $this->sante = $sante;
    }

    public function setForce(int $force) {
        $this->force = $force;
    }
}
