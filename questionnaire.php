<?php include('lecture_langue.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php echo questionnaire_page_titre ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
      #page3{
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
      <?php require('include/menu.php'); ?>


      <?php
      if(isset($_GET['erreur']) && $_GET['erreur'] == 1){
        ?>
        <div class="alert alert-danger" role="alert">
          <?php echo questionnaire_message_d_erreur ?>
        </div>
        <?php
      }
      ?>


  <form method="POST" action="resultats.php">

   <fieldset class="form-group">
    <div class="col-sm-10">
      <legend class="categorie_question"><?php echo questionnaire_titre_1 ?></legend>
        <div class="reponse_question">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios1" value="1">
        <label class="form-check-label" for="gridRadios1">
          <?php echo questionnaire_cat_1_reponse_1 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios2" value="2">
        <label class="form-check-label" for="gridRadios2">
          <?php echo questionnaire_cat_1_reponse_2 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios3" value="3">
        <label class="form-check-label" for="gridRadios3">
          <?php echo questionnaire_cat_1_reponse_3 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios4" value="4">
        <label class="form-check-label" for="gridRadios4">
          <?php echo questionnaire_cat_1_reponse_4 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios5" value="5">
        <label class="form-check-label" for="gridRadios5">
          <?php echo questionnaire_cat_1_reponse_5 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Pg" id="gridRadios6" value="6">
        <label class="form-check-label" for="gridRadios6">
          <?php echo questionnaire_cat_1_reponse_6 ?>
        </label>
      </div>
    </div>


    </div>

  </fieldset>


  <fieldset class="form-group">
    <div class="col-sm-10">
      <legend class="categorie_question"><?php echo questionnaire_titre_2 ?></legend>

        <div class="reponse_question">

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_1" value="1">
        <label class="form-check-label" for="gridRadios2_1">
          <?php echo questionnaire_cat_2_reponse_1 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_2" value="2">
        <label class="form-check-label" for="gridRadios2_2">
          <?php echo questionnaire_cat_2_reponse_2 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_3" value="3">
        <label class="form-check-label" for="gridRadios2_3">
         <?php echo questionnaire_cat_2_reponse_3 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_4" value="4">
        <label class="form-check-label" for="gridRadios2_4">
          <?php echo questionnaire_cat_2_reponse_4 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_5" value="5">
        <label class="form-check-label" for="gridRadios2_5">
          <?php echo questionnaire_cat_2_reponse_5 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_6" value="6">
        <label class="form-check-label" for="gridRadios2_6">
          <?php echo questionnaire_cat_2_reponse_6 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_7" value="7">
        <label class="form-check-label" for="gridRadios2_7">
          <?php echo questionnaire_cat_2_reponse_7 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_8" value="8">
        <label class="form-check-label" for="gridRadios2_8">
          <?php echo questionnaire_cat_2_reponse_8 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_9" value="9">
        <label class="form-check-label" for="gridRadios2_9">
          <?php echo questionnaire_cat_2_reponse_9 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_10" value="10">
        <label class="form-check-label" for="gridRadios2_10">
          <?php echo questionnaire_cat_2_reponse_10 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_11" value="11">
        <label class="form-check-label" for="gridRadios2_11">
          <?php echo questionnaire_cat_2_reponse_11 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_12" value="12">
        <label class="form-check-label" for="gridRadios2_12">
          <?php echo questionnaire_cat_2_reponse_12 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_13" value="13">
        <label class="form-check-label" for="gridRadios2_13">
          <?php echo questionnaire_cat_2_reponse_13 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_14" value="14">
        <label class="form-check-label" for="gridRadios2_14">
          <?php echo questionnaire_cat_2_reponse_14 ?>
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="Bf" id="gridRadios2_15" value="15">
        <label class="form-check-label" for="gridRadios2_15">
          <?php echo questionnaire_cat_2_reponse_15 ?>
        </label>
      </div>
    </div>

    </div>

  </fieldset>

<button type="submit" name="valider" class="btn btn-warning bouton"><?php echo questionnaire_bouton ?></button>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</html>
