<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

use samplephp\impl\JsonSerializable2;
use samplephp\exception\NegativeException;

class produit01 extends Produit implements JsonSerializable2 {
    private $nom;

    public function __construct(string $nom, string $libelle, int $prixcli, int $nombre) {
        parent::__construct($nom, $libelle, $nombre);
        $this->getPrixcli = $prixcli;
    }

       	function calcul_pourcentage($prixcli,$prixcons,$pourcentage)
    { 
      $prixcons = $prixcli - ($prixcli * $pourcentage);
      return $this->getPrixcons = $prixcons; 
    } 

        if($targetProduit->getPrixcli() === 0) {
            return;
        }

        if($targetProduit->getPrixcli() < 0) {
            $targetProduit->setPrixcli(0);
            return;
        }

        $targetProduit->setPrixcli($targetProduit->getPrixcli();
    }

    public function getPrixcons(): int {
        return $this->prixcons;
    
    }

    public function setPrixcons(int $prixcons) {
        $this->prixcons = $prixcons;
    }

    public function getJson(): string {
        return "{" 
                    . "<br>nom: " . $this->getNom() . ","
                    . "<br>libelle: " . $this->getLibelle() . ","
                    . "<br>prixcli: " . $this->getPrixcli() . ","
                    . "<br>prixcons: " . $this->getPrixcons() . ","
                    . "<br>nombre: " . $this->getNombre() .
                "<br>}<br>";
    }

}
