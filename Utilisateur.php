<?php
    class Utilisateur {
        protected string $nom ;
        protected string $email;

        public function __construct($nom , $email)
        {
            $this -> nom = $nom;
            $this -> email = $email;
        }

        public function getName(){
            return $this -> nom ;
        }
        public function getEmail(){
            return $this -> email;
        }

        public function setName($nom){
            $this -> nom = $nom;
        }
        public function setEmail($email){
            $this -> email = $email;
        }

        public function afficherDeatils($nom , $email){
            echo $this -> $nom;
            echo $this -> $email;
        }
    }
?>