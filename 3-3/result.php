<?php  

  //②フォームからのデータを受け取ります
  
  $my_name = $_GET['my_name'];
  $number = $_GET['number'];
  ?>
 

  
  <?php
  $rand = $number * mt_rand(1, 6);

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます 
  if($rand>1 && $rand<10){
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "名前は".$my_name."です";
    echo "<br>";
    echo "番号は".$rand."です";
    echo "<br>";
    echo "結果は凶です";
  }else if($rand>11 && $rand<15){
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "名前は".$my_name."です";
    echo "<br>";
    echo "番号は".$rand."です";
    echo "<br>";
    echo "結果は小吉です";
  }else if($rand>16 && $rand<20){
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "名前は".$my_name."です";
    echo "<br>";
    echo "番号は".$rand."です";
    echo "<br>";
    echo "結果は中吉です";
  }else if($rand>21 && $rand<25){
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "名前は".$my_name."です";
    echo "<br>";
    echo "番号は".$rand."です";
    echo "<br>";
    echo "結果は大吉です";
  }else if($rand>37){
    echo date("Y年m月d日 H時i分s秒", time());
    echo "<br>";
    echo "名前は".$my_name."です";
    echo "<br>";
    echo "番号は".$rand."です";
    echo "残念";
  }

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
 
  