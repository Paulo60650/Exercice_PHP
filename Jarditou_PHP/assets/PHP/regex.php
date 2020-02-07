<?php
// Déclaration de ma fonction 
function verif()
{
    // Déclaration de mes regex
    $alpha = " /(^[a-zA-Zéèêëôœîïûüàáâæç-]+$)/ ";
    $mail = " /(^[\w\.-]+@[a-z]+[\.]{1}[a-z]{2,3}$)/ ";
    $cp = " /(^[0-9]{5}$)|^$/ ";
    $adr = " /(^[0-9]+[a-zA-Z-\s]+$)|^$/ ";
    $city =  " /(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-]+$)|^$/ ";
    // Récupération des valeurs du formulaire en fonction de leurs ID
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date = $_POST["date"];
    $CP = $_POST["codepost"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $email = $_POST["mail"];
    $sujet = $_POST["sujet"];
    $question = $_POST["question"];

    $Erreur = [];
    $Resultat = [];

    if (!empty($nom)) {
        if (preg_match($alpha, $nom)) {
            $Resultat = ['Nom' => $nom];
        } else {
            $Erreur["Nom"] = "Veuillez ne saisir que des lettres";
        }
    } else {
        $Erreur["Nom"] = "Champs obligatoire";
    }
    if (!empty($prenom)) {
        if (preg_match($alpha, $prenom)) {
            $Resultat['Prenom'] = $prenom;
        } else {
            $Erreur["Prenom"] = "Veuillez ne saisir que des lettres";
        }
    } else {
        $Erreur["Prenom"] = "Champs obligatoire";
    }
    if (isset($_POST['sexe'])) {

        $Resultat["Sexe"] = $_POST['sexe'];
    } else {

        $Erreur["Sexe"] = "Veuillez indiquer votre sexe";
    }
    if (!empty($date)) {
        $Resultat["Date de naissance"] = $date;
    } else {
        $Erreur["Date de naissance"] = "Champs obligatoire";
    }
    if (preg_match($cp, $CP)) {
        $Resultat["Code Postal"] = $CP;
    } else {
        $Erreur["Code postal"] = "Le format du code postal n'est pas respecté";
    }
    if (preg_match($adr, $adresse)) {
        $Resultat["Adresse"] = $adresse;
    } else {
        $Erreur["Adresse"] = "Le format de l'adresse n'est pas respecté";
    }

    if (preg_match($city, $ville)) {
        $Resultat["Ville"] = $ville;
    } else {
        $Erreur["Ville"] = "Le format de la ville n'est pas respecté";
    }
    if (!empty($email)) {

        if (preg_match($mail, $email)) {
            $Resultat['Email'] = $email;
        } else {
            $Erreur["Email"] = "Le format email n'est pas respecté";
        }
    } else {
        $Erreur["Email"] = "Champs obligatoire";
    }
    if ($sujet != "Choisissez") {
        $Resultat["Sujet"] = $sujet;
    } else {
        $Erreur["Sujet"] = "Veuillez choisir un sujet";
    }
    if (!empty($question)) {
        $Resultat["Question"] = $question;
    } else {
        $Erreur["Question"] = "Champs obligatoire";
    }
    if (!isset($_POST['accept'])) {
        $Erreur["Validation"] = "Veuillez accepter le traitement du formulaire";
    }
     if (count($Erreur) != 0) {
         return $Erreur;
     }
}