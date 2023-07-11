<?php

define("TAX" , "0.1");

$products = ["鉛筆" =>100 , "消しゴム" =>150 , "物差し" =>500 ];

function price($products){
    
    foreach($products as $key => $value){
        $price =$value * (1+TAX);
        echo $key."の税込み価格は".$price."円です";
        echo "<br>";
    }
}

price($products);

?>