<?php include('lecture_langue.php'); ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo liste_indicateurs_page_titre ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        html{
          scroll-behavior: smooth;
        }

        #page2{
          text-decoration: underline;
        }
    </style>
  </head>
  <body>

  <?php require('include/menu.php'); ?>

<div id="indicateurs_container">

    <div id="close_menu"> <?php echo liste_indicateurs_menu_cacher ?> </div>
    <nav class="nav flex-column" id="indicateurs_nav">
      <p class="text-center"> <?php echo liste_indicateurs_menu_titre ?> </p>
      <a class="nav-link nav-link-indic" href="#theme1"> <?php echo liste_indicateurs_menu_section_1 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme2"> <?php echo liste_indicateurs_menu_section_2 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme3"> <?php echo liste_indicateurs_menu_section_3 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme4"> <?php echo liste_indicateurs_menu_section_4 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme5"> <?php echo liste_indicateurs_menu_section_5 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme6"> <?php echo liste_indicateurs_menu_section_6 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme7"> <?php echo liste_indicateurs_menu_section_7 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme8"> <?php echo liste_indicateurs_menu_section_8 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme9"> <?php echo liste_indicateurs_menu_section_9 ?> </a>
      <a class="nav-link nav-link-indic" href="#theme10"> <?php echo liste_indicateurs_menu_section_10 ?> </a>
    </nav>

    <div id="list_container">

    <h1 class="titre_categorie"> <?php echo liste_indicateurs_titre_1 ?> </h1>

    <h2 class="titre_indicateurs" id="theme1"> <?php echo liste_indicateurs_sous_titre_1 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
      <ul class="liste_indicateurs">
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicator 1 - Evaluation of Understanding of Care Practices" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_1 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_2 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_3 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_4 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_5 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_6 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_1_indic_7 ?> </a></li>
      </ul>
      <img src="public/Images/illu3.jpg" alt="illustration" id="illu_indic">
    </div>
    </div>

    <h2 class="titre_indicateurs" id="theme2"> <?php echo liste_indicateurs_sous_titre_2 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
    <ul class="liste_indicateurs">
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_2_indic_1 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_2_indic_2 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_2_indic_3 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_2_indic_4 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_2_indic_5 ?> </a></li>
    </ul>
    </div>
    </div>

    <h2 class="titre_indicateurs" id="theme3"> <?php echo liste_indicateurs_sous_titre_3 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
    <ul class="liste_indicateurs">
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_3_indic_1 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_3_indic_2 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_3_indic_3 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_3_indic_4 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_3_indic_5 ?> </a></li>
    </ul>
    </div>
    </div>

    <h2 class="titre_indicateurs" id="theme4"> <?php echo liste_indicateurs_sous_titre_4 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
      <ul class="liste_indicateurs">
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_4_indic_1 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_4_indic_2 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_4_indic_3 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_4_indic_4 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_4_indic_5 ?> </a></li>
      </ul>
      <img src="public/Images/illu4.jpg" alt="illustration" id="illu_indic">
    </div>
    </div>

    <h2 class="titre_indicateurs" id="theme5"> <?php echo liste_indicateurs_sous_titre_5 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
    <ul class="liste_indicateurs">
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_5_indic_1 ?> </a></li>
    </ul>
    </div>
    </div>

    <h1 class="titre_categorie"> <?php echo liste_indicateurs_titre_2 ?> </h1>

    <h2 class="titre_indicateurs" id="theme6"> <?php echo liste_indicateurs_sous_titre_6 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
      <ul class="liste_indicateurs">
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_1 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_2 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_3 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_4 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_5 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_6 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_6_indic_7 ?> </a></li>
      </ul>
      <img src="public/Images/illu2.jpg" alt="illustration" id="illu_indic">
    </div>
    </div>

    <h2 class="titre_indicateurs" id="theme7"> <?php echo liste_indicateurs_sous_titre_7 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
    <ul class="liste_indicateurs">
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_1 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_2 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_3 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_4 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_5 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_6 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_7 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_8 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_7_indic_9 ?> </a></li>
    </ul>
    </div>
    </div>


    <h2 class="titre_indicateurs" id="theme8"> <?php echo liste_indicateurs_sous_titre_8 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
      <ul class="liste_indicateurs">
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_8_indic_1 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_8_indic_2 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_8_indic_3 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_8_indic_4 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_8_indic_5 ?> </a></li>
      </ul>
      <img src="public/Images/illu1.jpg" alt="illustration" id="illu_indic">
    </div>
    </div>


    <h2 class="titre_indicateurs" id="theme9"> <?php echo liste_indicateurs_sous_titre_9 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
      <ul class="liste_indicateurs">
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_1 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_2 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_3 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_4 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_5 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_6 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_7 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_8 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_9 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_10 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_11 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_12 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_13 ?> </a></li>
        <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_9_indic_14 ?> </a></li>
      </ul>
    </div>
    </div>

    <h1  class="titre_categorie"> <?php echo liste_indicateurs_titre_3 ?> </h1>

    <h2 class="titre_indicateurs" id="theme10"> <?php echo liste_indicateurs_sous_titre_10 ?> </h2>
    <hr>
    <div class="container">
    <div class="row">
    <ul class="liste_indicateurs">
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_1 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_2 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_3 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_4 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_5 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_6 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_7 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_8 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_9 ?> </a></li>
      <li><a href="public/Indicateurs/Indicateur 4.docx" download="Indicateur" class="download_indicateur"> <?php echo liste_indicateurs_cat_10_indic_10 ?> </a></li>
    </ul>
    </div>
    </div>

  </div>

</div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#close_menu').click(function(){
      if($('#indicateurs_nav').css('display') == 'none'){
        $('#indicateurs_nav').css('display', 'block');
        $('#list_container').css('margin-left', '250px');
        $('#close_menu').text('Cacher menu');
      }else{
        $('#indicateurs_nav').css('display', 'none');
        $('#list_container').css('margin-left', '100px');
        $('#close_menu').text('<?php echo liste_indicateurs_menu_afficher ?>');
      }

    });
  </script>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  </html>
