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
                    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formController->processForm();
} else {
    $formController->showForm();
}
                    ?>

            </div>
        </div>      



        <?php include('__includes/04_footer.php'); ?>