<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Produit {
    private $id_p;
    private $titre_p;
    private $libelle_p;
    private $prixcli;
    private $prixcons;
    private $size_p;
    private $color_p;
    private $quantite_p;

    public function __construct(int $sante, int $force) {
        $this->id = $id_p;
        $this->titre = $titre_p;
        $this->libelle = $libelle_p;
        $this->prixcli = $prixcli;
        $this->prixcons = $prixcons;
        $this->size_p = $size_p;
        $this->color_p = $color_p;
        $this->quantite_p = $quantite_p;
    }

    public function getId(): int {
        return $this->id;
    }

    public function gettitre(): int {
        return $this->titre;
    }

    public function setid(int $id_p) {
        $this->id = $id_p;
    }

    public function settitre(int $titre_p) {
        $this->titre = $titre_p;
    }
    public function getlibelle(): int {
        return $this->libelle;
    }
    public function setlibelle(int $libelle_p) {
        $this->libelle = $libelle_p;
    }
    public function getPrixcli(): int {
        return $this->prixcli;
    }
    public function setprixcli(int $prixcli) {
        $this->prixcli = $prixcli;
    }
    public function getPrixcons(): int {
        return $this->prixcons;
    }
    public function setprixcons(int $prixcons) {
        $this->prixcons = $prixcons;
    }
    public function getSize(): int {
        return $this->size;
    }
    public function setsize(int $size_p) {
        $this->size = $size_p;
    }
    public function getColor(): int {
        return $this->color;
    }
    public function setcolor(int $color_p) {
        $this->color = $color_p;
    }
    public function getQuantite(): int {
        return $this->quantite;
    }
    public function setQuantite(int $quantite_p) {
        $this->quantite = $quantite_p;
    }
}
