<?php
  session_start();
  include 'config/connexion.php';
    /*=================================Gestion des pages web====================================*/  
    $pages=scandir("pages/");
    if(isset($_GET['menu']) && (!empty($_GET['menu']))){
        if(in_array($_GET['menu'].'.php',$pages)){
            $page=$_GET['menu'];
        }
        else{
            $page='error';
        }
    }else{
        $page='login';
    }

    /*=================================Gestion des fichiers model=================================*/
     $pages_model=scandir('model/');
    //si la fichier cherché  est présent dans le dossier "model"
    if(in_array($page.'.model.php',$pages_model)){
        //on inclut le fichier.model.php correspondant
        include 'model/'.$page.'.model.php';
    }
    else{
        //sinon afficher la page d'erreur
        $page="error";
    }

    /*=================================Gestion des fichiers controller==============================*/
     $pages_control=scandir('control/');
    //si la fichier cherché  est présent dans le dossier "controller"
    if(in_array($page.'.control.php',$pages_control)){
        //on inclut le fichier.control.php correspondant
        include 'control/'.$page.'.control.php';
    }
    else{
        //sinon afficher la page d'erreur
        $page="error";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body> 
  <?php
        if($page !='login' && !isset($_SESSION['login'])):
            header('location:index.php?menu=login');
        endif;
    ?>

    <!--***************************
      entete du site web
      ***************************-->
    <?php
        include "body/topbar.php";
    ?>

    <!--***************************
      contenu du site web
      ***************************-->
    <?php
        include 'pages/'.$page.'.php';
    ?>

    <!--***************************
      pied du site web
      ***************************-->
    <?php
        include "body/footer.php";
    ?>     

  <!--  Scripts-->
  <script src="../jquery/dist/jquery.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  <?php
      $pages_js=scandir('../js/');
      //si la fichier cherché est présent dans le dossier "js"
      if(in_array($page.'.func.js',$pages_js)){
          //on inclut le fichier.func.php correspondant
          ?>
              <script src="js/<?= $page ?>.func.js"></script>
          <?php
      }
      else{
          //sinon afficher la page d'erreur
          $page="error";
      }
  ?>
  
  </body>
</html>
