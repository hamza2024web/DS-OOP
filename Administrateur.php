<?php
require_once"Utilisateur.php";

class Administrateur extends Utilisateur{
    private string $role ;

    public function __construct($role)
    {
        $this -> role = $role;
    }

    public function getRole(){
        return $this -> role;
    }
    public function setRole($role){
        $this -> role = $role;
    }

    public function afficherRole($role){
        echo $this -> $role;
    }
    public function supprimerArticle(){

    }
}
?>