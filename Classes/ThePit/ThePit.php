<?php
/**
 * Created by PhpStorm.
 * User: Max-Game
 * Date: 08.10.2018
 * Time: 12:45
 */

namespace HTL3R\MegaHamsterCom\ThePit;

use HTL3R\MegaHamsterCom\Product as Product;

class ThePit implements Product\Product {
    protected $sideLength;
    protected $price;
    protected $specialEquipment;
    protected $imgPath;

    public function __construct($sideLength=0.0,$price=0.0,$specialEquipment=[], $imgPath="")
    {
        $this->sideLength=$sideLength;
        $this->price=$price;
        $this->specialEquipment=$specialEquipment;
        $this->imgPath="D:\\Programme\\xampp\\htdocs\\Git\\MegaHamsterCom\\img\\".$imgPath;
        //$this->markImgWithWatermark();
    }

    function outputProductInfo()
    {
        echo "“Our Domain 'The Pit' is the basic choice of real estate for a
            hamster owner. It features a length of ".$this->sideLength." cm:
            It is available for the low price of EUR ".$this->price.",-";
    }

    function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }

    function calculateArea()
    {
        /*Insert formel*/
        return 0;
    }

    function markImgWithWatermark(){
        $img = imagecreatefromjpeg($this->imgPath);
        $img_width=imagesx($img);
        $img_height=imagesy($img);
        $watermark=imagecreatefromjpeg("D:\\Programme\\xampp\\htdocs\\Git\\MegaHamsterCom\\img\\watermark.jpg");
        $watermark_width=imagesx($watermark);
        $watermark_height=imagesy($watermark);

        $dest_x=$img_width-$watermark_width;
        $dest_y=$img_height-$watermark_height-20;

        imagecopy($img, $watermark, $dest_x, $dest_y, 0, 0,$watermark_width, $watermark_height);
        imagejpeg($img);
        //imagejpeg($img,"D:\\Programme\\xampp\\htdocs\\Git\\MegaHamsterCom\\img\\withWatermarks");

        imagedestroy($img);
        imagedestroy($img);
        imagedestroy($watermark);

        //echo "<img src='".$imgJPG."'>";
    }
}