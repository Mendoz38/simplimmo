<?php

require 'vendor/autoload.php';

use Simplimmo\BienImmobilier;
use Simplimmo\Maison;
use Simplimmo\classes\DBConfig;
use Simplimmo\controller\Annonces_controller;


include('__includes/01_head.php');
include('__includes/02_nav.php');

$db = new DBConfig();
$db->connect();

?>



<?php include('__includes/03_slider.php') ?>
<?php

//$pdo = new PDO('mysql:host='.$host_name2.';dbname='.$database2.';charset=utf8', $user_name2, $password2, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));		
//$count = $pdo->exec('INSERT INTO users SET name="zzzz" ');
//var_dump($count)
?>


<!-- property area -->
<div class="container">
    <div class="row">
        <div class="col-md-12  padding-top-40 properties-page">
            <div class="col-md-12 ">
                <div class="col-xs-10 page-subheader sorting pl0">

                    <ul class="sort-by-list">
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                Trier par date <i class="fa fa-sort-amount-asc"></i>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                Trier par prix <i class="fa fa-sort-numeric-desc"></i>
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    <div class="items-per-page">
                        <label for="items_per_page"><b>Biens par page :</b></label>
                        <div class="sel">
                            <select id="items_per_page" name="per_page">
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option selected="selected" value="12">12</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>
                        </div><!--/ .sel-->
                    </div><!--/ .items-per-page-->
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 ">
                <h3>Il y a actuellement XXX offres disponibles</h3>
                <div id="list-type" class="proerty-th">
                    <?php
                    $controller = new Annonces_controller();
                    $controller->index();
                    ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="pull-right">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Précèdent</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Suivant</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('__includes/04_footer.php'); ?>