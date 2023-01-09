<?php
Class Utilisateur
{
    public string $nom;
    public string $prenom;
    public int $anneeNaissance;
    public string $email;
    public int $score;
    public string $ville;
    public array $historiqueScores = [];

    public function afficheNom() {
        echo $this->nom;
    }

    public function age() {
        return date('Y') - $this->anneeNaissance;
    }

    public function afficheUtilisateur() {
        echo "<h1>$this->prenom $this->nom</h1>";
        echo "<p>Email : $this->email</p>";
        echo "<p>Score : $this->score</p>";
        echo "<p>Ville : $this->ville</p>";
        $age = $this->age();
        echo "<p>Age : $age ans</p>";
        $moyenne = $this->moyenneScores();
        echo "<p>Moyenne des scores : $moyenne</p>";
    }

    public function ajouteScore() {
        $this->historiqueScores[] = $this->score;
        $this->score = 0;
    }

    public function moyenneScores() {
        $total = 0;
        $n = 0;
        foreach ($this->historiqueScores as $score) {
            $total += $score;
            $n++;
        }
        if ($n > 0) {
            return $total / $n;
        } else {
            return 0;
        }
    }
}

$utilisateur = new Utilisateur();
$utilisateur->nom = "Doe";
$utilisateur->prenom = "John";
$utilisateur->anneeNaissance = 1980;
$utilisateur->email = "toto@titi.com";
$utilisateur->score = 100;
$utilisateur->ville = "Paris";

$utilisateur->ajouteScore();
$utilisateur->score = 200;

$utilisateur->ajouteScore();
$utilisateur->score = 300;

$utilisateur->ajouteScore();
$utilisateur->score = 400;

$utilisateur->afficheUtilisateur();