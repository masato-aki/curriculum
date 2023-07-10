<?php
const TAX = 1.1;

$products = ["鉛筆" =>"鉛筆の税込み価格は" , "消しゴム" =>"消しゴムの税込み価格は" , "物差し" => ];




function getTax($tax1) {
$result = $tax1 * Tax;
print $result."円です";
}

getTax(105);
getTax(150);
getTax(500);

foreach($products as $mono){
    echo $mono.getTax();
}


?>
