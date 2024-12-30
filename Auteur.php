<?php
    require_once"Utilisateur.php";
    require_once"Article.php";

    class Auteur extends Utilisateur{
        private string $biographie;

        public function __construct($biographie)
        {
            $this -> biographie = $biographie;
        }

        public function getBiog(){
            return $this -> biographie;
        }
        public function setBiog($biographie){
            $this -> biographie = $biographie;
        }

        public function afficherAuteur($nom , $email , $biographie){
            echo $this -> $nom;
            echo $this -> $email;
            echo $this -> $biographie;
        }
        public function creerArticle($titre , $contenu){
            $article = new Auteur($titre , $contenu);
            return $article;
        }
    }
?>