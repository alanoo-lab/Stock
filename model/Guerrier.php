<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

use samplephp\impl\JsonSerializable2;
use samplephp\exception\NegativeException;

class Guerrier extends Personnage implements JsonSerializable2 {
    private $resistance;

    public function __construct(int $sante, int $force, int $resistance) {
        parent::__construct($sante, $force);
        $this->resistance = $resistance;
    }

    public function attack(Personnage $targetPersonnage) {
        if($this->getForce() <= $targetPersonnage->getResistance()) {
            return;
        }

        if($targetPersonnage->getSante() === 0) {
            return;
        }

        $damage = $this->getForce() - $targetPersonnage->getResistance();

        if($targetPersonnage->getSante() < $damage) {
            $targetPersonnage->setSante(0);
            return;
        }

        $targetPersonnage->setSante($targetPersonnage->getSante() - $damage);
    }

    public function checkSanity() {
        if($this->getForce() < 0 || $this->getSante() < 0 || $this->resistance < 0) {
            throw new NegativeException("A parameter can't be lower than 0");
        }
    }

    public function getResistance(): int {
        return $this->resistance;
    
    }

    public function setResistance(int $resistance) {
        $this->resistance = $resistance;
    }

    public function getJson(): string {
        return "{" 
                    . "<br>sante: " . $this->getSante() . ","
                    . "<br>force: " . $this->getForce() . ","
                    . "<br>resistance: " . $this->resistance .
                        
                "<br>}<br>";
    }

}
