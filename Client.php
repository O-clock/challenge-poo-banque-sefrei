<?php
// * Définir une classe Client avec les attributs suivants : CIN, Nom, Prénom, Tél.
//   - Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
//   - Définir un constructeur permettant d’initialiser tous les attributs.
//   - Définir un constructeur permettant d’initialiser le CIN, le nom et le prénom.
//   - Définir la méthode Afficher () permettant d’afficher les informations du Client en cours.
class Client
{
  //Attributs
  private $cin;
  private $nom;
  private $prenom;
  private $tel;
//constructeur qui initialise tout les attributs avec un tel qu'on n'est pas obligé de rentrer
    public function __construct($cin, $nom, $prenom, $tel="")
    {
        $this->setCin($cin);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setTel($tel);
    }

    //Méthode d'affichage
    public function afficher()
    {
        $display = "<h2>Nouveau client</h2>";
        $display .= "<p> Cin: " . $this->cin . "</p>";
        $display .= "<p> Nom complet : " . $this->prenom . " " . $this->nom . "</p>";
        $display .= "<p> N° de téléphone : " . $this->tel . "</p>";
        return $display;
    }
//Métodes d'accès getters
  public function getCin()
  {
      return $this->cin;
  }

  public function getNom()
  {
      return $this->nom;
  }

  public function getPrenom()
  {
      return $this->prenom;
  }

  public function getTel()
  {
      return $this->tel;
  }

  //Métodes d'accès setters
    public function setCin($cin)
    {
      if(is_numeric($cin))
        $this->cin = $cin;
        return $this;
    }

    public function setNom($nom)
    {
        $this->nom = strip_tags($nom);
        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = strip_tags($prenom);
        return $this;
    }

    public function setTel($tel)
    {
        // $this->tel = strip_tags($tel);
        $this->tel = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
        return $this;
    }

}
