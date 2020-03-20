<?php

namespace samplephp\model;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Utilisateur {
    private $id_u;
    private $nom_u;
    private $prenom_u;
    private $tel_u;
    private $email_u;

    public function __construct(int $id_u, int $nom_u, int $prenom_u, int $tel_u, int $email_u) 
	{
        $this->id = $id_u;
        $this->nom = $nom_u;
        $this->prenom = $prenom_u;
        $this->tel = $tel_u;
        $this->email = $email_u;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getnom(): int {
        return $this->nom;
    }

    public function setid(int $id_u) {
        $this->id = $id_u;
    }

    public function setnom(int $nom_u) {
        $this->nom = $nom_u;
    }
    public function getprenom(): int {
        return $this->prenom;
    }
    public function setprenom(int $prenom_u) {
        $this->prenom = $prenom_u;
    }
    public function getTel(): int {
        return $this->tel;
    }
    public function setTel(int $tel_u) {
        $this->tel = $tel_u;
    }
    public function getEmail(): int {
        return $this->email;
    }
    public function setEmail(int $email_u) {
        $this->email = $email_u;
    }
}
