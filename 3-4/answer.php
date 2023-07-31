<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$hidden_param = $_POST["Q_name"];
$a=$_POST["Q_an1"];
$b=$_POST["Q_an2"];
$c=$_POST["Q_an3"];
$d=$_POST["num"];
$e=$_POST["lung"];
$f=$_POST["comando"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><?php echo $hidden_param;?>さんの結果は・・・？</p>

<p>①の答え
<?php if($a===$d){
        echo "正解です";
      }else{
        echo "残念";
      }
    ?>
    </p>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え
<?php if($b===$e){
        echo "正解です";
      }else{
        echo "残念";
      }
    ?>   
</p>
<!--作成した関数を呼び出して結果を表示-->


<p>③の答え
<?php if($c===$f){
        echo "正解です";
      }else{
        echo "残念";
      }
    ?>   
</p>
<!--作成した関数を呼び出して結果を表示-->