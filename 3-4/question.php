<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$num = [80, 22, 20, 21];
$lung = ["PHP", "Python", "JAVA", "HTML"];
$comando = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$an1=80;
$an2="PHP";
$an3="update";
?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->


<form action="answer.php" method="post">

<?php
foreach ($num as $value) { ?>
    <input type="radio" value="<?php echo $value; ?>" name="num">
    <?php echo $value;
}
?>
    
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($lung as $value) { ?>
    <input type="radio" value="<?php echo $value; ?>" name="lung">
    <?php echo $value;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
foreach ($comando as $value) { ?>
    <input type="radio" value="<?php echo $value; ?>" name="comando">
    <?php echo $value;
}
?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->


<input type="hidden" value="<?php echo $my_name;?>" name="Q_name" />

<input type="hidden" value="<?php echo $an1;?>" name="Q_an1"/>
<input type="hidden" value="<?php echo $an2;?>" name="Q_an2"/>
<input type="hidden" value="<?php echo $an3;?>" name="Q_an3"/>


<input type="submit" value="回答する" />

</form>