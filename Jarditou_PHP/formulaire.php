<?php
require_once('assets/PHP/regex.php');

if (isset($_POST["Envoyer"]) && $_POST["Envoyer"] == 'Envoyer') {
$res = verif();
  if($res == NULL){
    header('Location: assets/PHP/resultat.php');
  }
}
?>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Jarditou 2.0</title>
</head>
<body class="container">
    <!-- Debut du header -->
    <header class="row bg-dark mt-2">
        <div class="col-6">
    <!-- Logo -->
            <a id="logo" href="index.html"><img src="assets\img\jarditou_logo2.png" alt="Logo Jarditou" width="65%" height="auto" title="Retour accueil"></a>
        </div>
    <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-6">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="tableau.html">Tableau <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">Formulaire <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
              </form>
            </div>
          </nav>
    <!-- Promotion -->
          <img src="assets\img\promotion.jpg" alt="Promo Jarditou" title="Promo Jarditou" id="promo" class="w-100">
    </header>
    <hr>
     <!-- Debut Formulaire -->
     <section class="row" >
      <form action="#" method="post" class="col-5">
        <p id="obligatoire">* Ces zones sont obligatoires</p>
         <fieldset>
          <legend class="titre2">Vos coordonnées</legend>
          <div class="form-row">
            <label for="name">Votre nom*</label>
            <input type="text" id="nom" class="form-control" name="nom" value = '<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>' placeholder="Nom">
            <p id="errName" class="Erreur"><?php if (isset($res['Nom'])){echo $res['Nom'];}?></p>
          </div>
          <div class="form-row">
            <label for="prenom">Votre prénom*</label>
            <input type="text" id="prenom" class="form-control" name="prenom" value = '<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>' placeholder="Prénom">
            <p id="errPrenom" class="Erreur"><?php if (isset($res['Prenom'])){echo $res['Prenom'];}?></p>
          </div>
           <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="sexe" value='Madame'id="inlineRadio1"<?php if(isset($_POST['sexe'])&& $_POST['sexe'] == 'Madame'){echo "checked";} ?>>
           <label class="form-check-label" for="inlineRadio1">Madame*</label>
         </div>
         <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="sexe" value="Monsieur" id="inlineRadio2"<?php if(isset($_POST['sexe'])&& $_POST['sexe'] == 'Monsieur'){echo "checked";} ?>>
           <label class="form-check-label" for="inlineRadio2">Monsieur*</label><br>
         </div>
         <p id="errSexe" class="Erreur"><?php if (isset($res['Sexe'])){echo $res['Sexe'];}?></p>
              <div class="form-row">
                <label for="name">Date de naissance*</label>
                <input id="date" type="date" class="form-control" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>" name="date" placeholder="jj/mm/aaaa">
                <p id="errDate" class="Erreur"><?php if (isset($res["Date de naissance"])){echo $res["Date de naissance"];}?></p>
              </div>
              <div class="form-row">
                <label for="code">Code postal</label>
                <input id="codepost" type="birth" class="form-control" value = '<?php if(isset($_POST['codepost'])){echo $_POST['codepost'];} ?>' name="codepost" placeholder="80000">
                <p id="errCP" class="Erreur" > <?php if (isset($res["Code postal"])){echo $res["Code postal"];}?> </p>
              </div>
              <div class="form-row">
                <label for="adresse">Adresse</label>
                <input id="adresse" type="adresse" class="form-control" value="<?php if(isset($_POST['adresse'])){echo $_POST['adresse'];} ?>" name="adresse" placeholder="30 Rue de Poulainville">
                <p id="errAdr" class="Erreur"><?php if (isset($res["Adresse"])){echo $res["Adresse"];}?></p>
              </div>
              <div class="form-row">
                <label for="city">Ville</label>
                <input id="ville" type="city" class="form-control" value="<?php if(isset($_POST['ville'])){echo $_POST['ville'];} ?>" name="ville" placeholder="Amiens">
                <p id="errVille" class="Erreur"> <?php if (isset($res["Ville"])){echo $res["Ville"];}?></p>
              </div>
              <div class="form-row">
                <label for="courriel">Email*</label>
                <input id="mail" type="" class="form-control" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>" name="mail" placeholder="dave.loper@afpa.com">
                <p id="errMail" class="Erreur"><?php if (isset($res["Email"])){echo $res["Email"];}?></p>
              </div>
          </p>
         </fieldset>
         <!-- Fin première partie du formulaire -->
         <div>
          <fieldset class="formu">
              <legend class="titre2">Votre demande</legend>
              <p>
              <label for="sujet">Sujet* :</label> 
              <select name="sujet" id="sujet">
              <option value="Choisissez" >Choisissez</option>
              <option value="Mes commandes"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Mes commandes")){echo 'selected';}?>>Mes commandes</option>
              <option value="Question sur un produit"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Question sur un produit")){echo 'selected';}?>>Question sur un produit</option>
              <option value="Réclamation"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Réclamation")){echo 'selected';}?>>Réclamation</option>
              <option value="Autres"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="Autres")){echo 'selected';}?>>Autres</option>
          </select><br>
          <p id="errSujet" class="Erreur"><?php if (isset($res["Sujet"])){echo $res["Sujet"];}?></p> 
          <label for="question">Votre question* :</label><textarea class="form-control" id="question" aria-label="With textarea" name="question"><?php if(isset($_POST['question'])){echo $_POST['question'];} ?> </textarea>
          <p id="errQuest" class="Erreur"><?php if (isset($res["Question"])){echo $res["Question"];}?></p>
          </p>
          </fieldset>
          <p>
          <input type="checkbox" class="form-check-input" id="accept" name="accept"> J'accepte le traitement informatique de ce formulaire<br>
          <p id="errAccept" class="Erreur"><?php if (isset($res["Validation"])){echo $res["Validation"];}?></p>
          </p>
          <input id="envoie" class="btn btn-primary" type="submit" value="Envoyer" name ="Envoyer">
          <input class="btn btn-primary" type="reset" value="Annuler">
          </div>
      </form>
  </section>
    <!-- Debut du footer -->
    <hr>
    <footer class="mb-3">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link active" href="#">Mention légales</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Horaires</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Plan du site</a></li>
        </ul>
    </footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script src="assets/JS/JS.js"></script> -->
</body>
</html>