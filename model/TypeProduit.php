<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class TypeProduit {
    private $id_t;
    private $libelle_t;

    public function __construct(int $id_t, int $libelle_t) {
        $this->id = $id_t;
        $this->libelle = $libelle_t;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getLibelle(): int {
        return $this->libelle;
    }

    public function setLibelle(int $libelle_t) {
        $this->libelle = $libelle_t;
    }

    public function setForce(int $force) {
        $this->force = $force;
    }
}
