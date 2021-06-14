<!DOCTYPE html>
<html lang="en">
<?php include('lecture_langue.php'); ?>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title><?php echo index_page_titre ?></title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="public/css/pages_fixes.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
        <style>
          #page0{
            text-decoration: underline;
          }
        </style>
  </head>
  <body>

    <?php

    require('include/menu.php'); ?>



<main role="main" class="container">

   <!-- START THE FEATURETTES -->
   <h1 id="titreSMPS"><center><?php echo index_titre ?></center></h1>

    <hr class="featurette-divider">
    <div class="row featurette" id="case1">
      <div class="col-md-7" id="paragraphe1SMPSGP">
        <h2 class="featurette-heading"><center><?php echo index_sous_titre_1 ?></center> </h2>
        <br/>
        <p class="lead">
        <?php echo index_p1 ?>
       </p>
      </div>
      <div class="col-md-5">
        <img src="public/Images/photoSMPS1.jpg" alt="" id="photoSMPS1" /> <br/>
        <div id="copyrightSMPS1">
        <right><?php echo index_copyright_1 ?></right>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" id="case2">
      <div class="col-md-7 order-md-2" id="paragraphe2SMPSGP">
        <h2 class="featurette-heading"><center><?php echo index_sous_titre_2 ?></center></h2>
        <br/>
        <p class="lead">
          <?php echo index_p2 ?>
          </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="public/Images/photoSMPS2.jpg" alt="" id="photoSMPS2"/><br/>
        <div id="copyrightSMPS2">
        <?php echo index_copyright_2 ?>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" id="case3">
      <div class="col-md-7" id="paragraphe3SMPSGP">
        <h2 class="featurette-heading"><center><?php echo index_sous_titre_3 ?></center></h2> <br/>
        <p class="lead">
          <?php echo index_p3 ?>
      </p>

      </div>
      <div class="col-md-5">
               <img src="public/Images/photoSMPS3.jpg" alt="" id="photoSMPS3"/><br/>
               <div id="copyrightSMPS3">
        <?php echo index_copyright_3 ?>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">


    <div class="row featurette" id="case4">
      <div class="col-md-7 order-md-2" id="paragraphe4SMPSGP">
              <h2 class="featurette-heading"><center> <?php echo index_sous_titre_4 ?> </center></h2> <br/>
        <p class="lead">
          <?php echo index_p4 ?>
      </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="public/Images/photoSMPS4.jpg" alt="" id="photoSMPS4"/><br/>
        <div id="copyrightSMPS4">
          <?php echo index_copyright_4 ?>
      </div>
      </div>
    </div>

    <hr class="featurette-divider">

     <div class="row featurette" id="case5">
      <div class="col-md-7" id="paragraphe5SMPSGP">
        <h2 class="featurette-heading"><center> <?php echo index_sous_titre_5 ?></center> </h2> <br/>
        <p class="lead">
          <?php echo index_p5 ?>
      </p>
      </div>
      <div class="col-md-5">
               <img src="public/Images/photoSMPS5.jpg" alt="" id="photoSMPS5"/><br/>
               <div id="copyrightSMPS5">
                 <?php echo index_copyright_5 ?>
             </div>
      </div>
    </div>

    <hr class="featurette-divider">


</main><!-- /.container -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</html>
