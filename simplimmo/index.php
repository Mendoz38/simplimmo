<?php
require 'vendor/autoload.php';

use Simplimmo\BienImmobilier ;
use Simplimmo\Maison ;
use Simplimmo\DBConfig;


$bien_1 = new BienImmobilier(
    surface: "80",
    prix: "120",
    localisation: "ici",
    nbr_piece: "2"
);
$db = new DBConfig();
$db->connect();
//$bien_1->create();
//var_dump($bien_1)

echo "La surface est de " . $bien_1->getSurface() . " m² <br />";

echo "Prix : " . $bien_1->getPrix() . "€ <br />";
echo "Prix TTC: " . $bien_1->getPrixFNI() . "€ <br />";

$maison_1 = new Maison(
    surface: "80",
    prix: "120",
    localisation: "ici",
    nbr_piece: "2",
    etage: "5",
    terrain: "8",
    piscinable: "oui",
);

// var_dump($maison_1);


function debug($arg)
{
    echo "<pre>" . print_r($arg, true) . "</pre>";
}
debug($maison_1);
?>

<p>Le tarif hors FNI est <?php echo $bien_1->getPrixFNI(); ?></p>
<p>Le tarif hors FNI est <?php echo $bien_1->getPrixFNI(); ?></p>


<?php $bien_1->setFraisDeNotaire(10)  ?>

<p>Le nouveau tarif hors FNI est <?php echo $bien_1->getPrixFNI(); ?></p>