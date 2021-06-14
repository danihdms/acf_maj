<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php include('lecture_langue.php'); ?>
  <head>
    <meta charset="utf-8">
    <title><?php echo resultats_titre ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>

  <?php

    require('include/menu.php');
    require('coDB.php');

    if(!isset($_POST['Pg']) || !isset($_POST['Bf'])){
    	header('Location: questionnaire.php?erreur=1');
    }


    	$type_prog = $_POST['Pg'];
    	switch ($type_prog) {

    		case 1:
        $theme='prevention_malnutrition';
    		break;

    		case 2:
        $theme='traitement_malnutrition';
    		break;

    		case 3:
        $theme='personnes_en_detresse';
    		break;

    		case 4:
        $theme="espace_mere_bebes";
    		break;

    		case 5:
        $theme="accompagnement_familial";
    		break;

    		case 6:
        $theme="autre";
    		break;
    	}



    	$type_benef = $_POST['Bf'];
    	switch ($type_benef) {

    		case 1:
        $beneficiaire='Enfant<2ansAllaite';
    		break;

    		case 2:
        $beneficiaire='enfant<5ans';
    		break;

    		case 3:
        $beneficiaire='enfant6-11ans';
    		break;

    		case 4:
        $beneficiaire='ado';
    		break;

    		case 5:
        $beneficiaire="adolescente_enceinte";
    		break;

    		case 6:
    		$beneficiaire="adolescente_allaitante";
    		break;

    		case 7:
    		$beneficiaire="adulte";
    		break;

    		case 8:
    		$beneficiaire="femme_enceinte";
    		break;

    		case 9:
    		$beneficiaire="femme_allaitante";
    		break;

    		case 10:

        $beneficiaire="belle-mere";
    		break;

    		case 11:

        $beneficiaire="mere_adolescente";
    		break;

    		case 12:

        $beneficiaire="mere";
    		break;

    		case 13:

        $beneficiaire="adulte";
    		break;

    		case 14:

        $beneficiaire="pere";
    		break;

    		case 15:

        $beneficiaire="adulte";
    		break;
    	}


      $stmt_recommande = $pdo->prepare("SELECT * FROM $theme WHERE beneficiaire = ? AND type = 'recommande' ORDER BY priorite DESC, type");
      $stmt_recommande->execute(array($beneficiaire));

      if ($result = $stmt_recommande->fetch()) {
        ?>
        <h1 class="categorie_question"><?php echo resultats_recommande_existant ?></h1>
        <?php
        do {
          ?>
          <ul>
            <?php
              echo '<li class="reponse_question"><a href="public/Indicateurs/'. $result['lien_pdf'] .'" download="Indicateur" class="download_indicateur">' . $result['indicateur'] . '</a></li>';
            ?>
          </ul>
          <?php
        } while ($result = $stmt_recommande->fetch());
      }else{
        ?>
        <p class="categorie_question"> <?php echo resultats_recommande_inexistant ?></p>
        <?php
      }



        $stmt_essentiel = $pdo->prepare("SELECT * FROM $theme WHERE beneficiaire = ? AND type = 'essentiel' ORDER BY priorite DESC, type");
      	$stmt_essentiel->execute(array($beneficiaire));

        if ($result = $stmt_essentiel->fetch()) {
          ?>
          <h1 class="categorie_question"><?php echo resultats_essentiel_existant ?></h1>
          <?php
          do {
            ?>
            <ul>
              <?php
                echo '<li class="reponse_question"><a href="public/Indicateurs/'. $result['lien_pdf'] .'" download="Indicateur" class="download_indicateur">' . $result['indicateur'] . '</a></li>';
              ?>
            </ul>
            <?php
          } while ($result = $stmt_essentiel->fetch());
        }else{
          ?>
          <p class="categorie_question"><?php echo resultats_essentiel_inexistant ?></p>
          <?php
        }


      $stmt_optionnel = $pdo->prepare("SELECT * FROM $theme WHERE beneficiaire = ? AND type = 'optionnel' ORDER BY priorite DESC, type");
      $stmt_optionnel->execute(array($beneficiaire));

      if ($result = $stmt_optionnel->fetch()) {
        ?>
        <h1 class="categorie_question"><?php echo resultats_optionnel_existant ?></h1>
        <?php
        do {
          ?>
          <ul>
            <?php
              echo '<li class="reponse_question"><a href="public/Indicateurs/'. $result['lien_pdf'] .'" download="Indicateur" class="download_indicateur">' . $result['indicateur'] . '</a></li>';
            ?>
          </ul>
          <?php
        } while ($result = $stmt_optionnel->fetch());
      }else{
        ?>
        <p class="categorie_question"><?php echo resultats_optionnel_inexistant ?></p>
        <?php
      }
      ?>

      <a href="questionnaire.php" class="btn btn-warning bouton" role="button"><?php echo resultats_revenir ?></a>

  </body>
</html>
