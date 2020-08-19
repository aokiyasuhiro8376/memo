<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
try {
  // try chach 例外処理 指定した内容をechoで表示 これが無いとFatal error が出る(強制終了)
  // PHP Data Object
  // 第一　mysql:dbname=DB名; host=127.0.0.1自分の場合; charset=utf8,
  // 第二　user名
  // 第三　path
  $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8',
  'root', '');
} catch(PDOException $e) {
  // PDOが繋がらなかった場合 例外を $e に入れ
  // $e の中身を echoで表示
  echo 'DB接続エラー: ' . $e->getMessage();
}
?>
</pre>
</main>
</body>
</html>