<?php

namespace HTL3R\MegaHamsterCom;

require ('vendor/autoload.php');

use HTL3R\MegaHamsterCom\ThePit\ThePit;

//header('Content-Type: image/jpg');

$myPit = new ThePit(50,50,['test'], "eule.jpg");
var_dump($myPit->getSpecialEquipment());


//echo json_encode($myPit);

//print_r(gd_info());
?>