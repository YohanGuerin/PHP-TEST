<?php
/**
 * Created by PhpStorm.
 * User: yohan
 * Date: 11/01/2019
 * Time: 11:01
 */

require "../vendor/autoload.php";

use \php_auto\LigneFacture;
use \php_auto\Facture;

function debug ($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

$l1 = new LigneFacture('Art1', 10, 20);
$l2 = new LigneFacture('Art2', 15, 20);
$l3 = new LigneFacture('Art3', 20, 20);

$tablist = [$l1, $l2, $l3];

$facture = new Facture($tablist);

debug($facture);

echo $facture->calculateTotal();
