<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Conseiller {
    private $id_c;
    private $nom_c;
    private $prenom_c;
    private $part_c;
    private $tel_c;
    private $email_c;

    public function __construct(int $id_c, int $nom_c, int $prenom_c, int $part, int $tel_c, int $email_c) 
	{
        $this->id = $id_c;
        $this->nom = $nom_c;
        $this->prenom = $prenom_c;
        $this->part = $part_c;
        $this->tel = $tel_c;
        $this->email = $email_c;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getnom(): int {
        return $this->nom;
    }

    public function setid(int $id_c) {
        $this->id = $id_c;
    }

    public function setnom(int $nom_c) {
        $this->nom = $nom_c;
    }
    public function getprenom(): int {
        return $this->prenom;
    }
    public function setprenom(int $prenom_c) {
        $this->prenom = $prenom_c;
    }

    public function getPart(): int {
        return $this->part;
    }
    public function setpart(int $part_u) {
        $this->part = $part_u;
    }

    public function getTel(): int {
        return $this->tel;
    }
    public function setTel(int $tel_c) {
        $this->tel = $tel_c;
    }
    public function getEmail(): int {
        return $this->email;
    }
    public function setEmail(int $email_c) {
        $this->email = $email_c;
    }
}
