<?php 

require 'vendor/autoload.php';
use Simplimmo\controller\Register_controller;

include('__includes/01_head.php'); 
include('__includes/02_nav.php'); 

?>

<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Se connecter / Créer un compte </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

            <?php
                    $formController = new Register_controller();
                    
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Traiter les données soumises par le formulaire
    $formController->processForm();
} else {
    // Afficher le formulaire de contact
    $formController->showForm();
}
                    ?>

 <!--                   
                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Se connecter : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Se connecter</button>
                                </div>
                            </form>
                            <br>
                            
                            <h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                </div>
-->

            </div>
        </div>      



        <?php include('__includes/04_footer.php'); ?>