<?php

require 'vendor/autoload.php';

use Simplimmo\controller\Login_controller;

include('__includes/01_head.php');
include('__includes/02_nav.php');
?>

<div class="page-head">
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Se connecter </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">

        <?php
        $formController = new Login_controller();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // si le formulaire a été soumis
            $loginController->processForm();
            $loginController->showForm();
        }
        ?>
    </div>
</div>

<?php include('__includes/04_footer.php'); ?>