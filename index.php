<?php
Class Utilisateur
{
    public string $nom;
    public string $prenom;
    public int $anneeNaissance;
    public string $email;
    public int $score;
    public string $ville;
}

$utilisateur = new Utilisateur();
$utilisateur->nom = "Doe";
$utilisateur->prenom = "John";
$utilisateur->anneeNaissance = 1980;
$utilisateur->email = "toto@titi.com";
$utilisateur->score = 100;
$utilisateur->ville = "Paris";