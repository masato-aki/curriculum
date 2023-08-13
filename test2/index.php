
<?php

// セッションを開始する
session_start();

// エラーメッセージ、登録完了メッセージの初期化
$errorMessage = "";
$signUpMessage = "";

// データベース情報を初期化する
$dbHost = "localhost";
$dbName = "yigroupblog";
$dbUsername = "root";
$dbPassword = "";
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8;";


if($_POST) {

  if (empty($_POST["username"])) {
    $errorMessage = 'ユーザー名が未入力です。';
  } else if (empty($_POST["password1"])) {
    $errorMessage = 'パスワードが未入力です。';
  } else if (empty($_POST["password2"])) {
    $errorMessage = 'パスワード（確認用）が未入力です。';
  }

  // POST変数を受け取る
  if (!empty($_POST["username"]) && !empty($_POST["password1"]) && !empty($_POST["password2"]) && $_POST["password1"] === $_POST["password2"]) {

    $username = $_POST["username"];
    $password = $_POST["password1"];

    try {

      $pdo = new PDO($dsn, $dbUsername, $dbPassword);
      $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      $stmt = $pdo->prepare ("INSERT INTO `users` (`name`, `password`) VALUES ('$username','$password')");
      $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT))); 

      $userid = $pdo->lastinsertid();
      $signUpMessage = '登録が完了しました。あなたの登録IDは ' . $userid . ' です。パスワードは ' . $password . ' です。';

    } catch (PDOException $e) {

      $errorMessage = 'データベースエラー';
      echo $e->getMessage();

    }

  } else if ($_POST["password1"] != $_POST["password2"]) {
    $errorMessage = 'パスワードに誤りがあります。';
  }

}

?>

<html>
<head>
  <meta charset="UTF-8">
  <title>新規登録</title>
</head>
<body>
  <h1>新規登録画面</h1>
  <form id="loginForm" name="loginForm" action="" method="POST">
    <fieldset>
      <legend>新規登録フォーム</legend>
      <div>
        <p style="color: #ff0000">
          <?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?>
        </p>
      </div>
      <div>
        <p style="color: #0000ff">
          <?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?>
        </p>
      </div>
      <label for="username">ユーザー名</label>
      <input type="text" id="username" name="username" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) { echo htmlspecialchars($_POST["username"], ENT_QUOTES); } ?>">
      <br>
      <label for="password1">パスワード</label>
      <input type="password" id="password1" name="password1" value="" placeholder="パスワードを入力">
      <br>
      <label for="password2">パスワード(確認用)</label>
      <input type="password" id="password2" name="password2" value="" placeholder="再度パスワードを入力">
      <br>
      <input type="submit" id="signUp" value="登録">
    </fieldset>
  </form>
</body>

</html>
