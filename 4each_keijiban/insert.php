<?php
mb_internal_encoding("UTF-8");
//
$pdo = new PDO("mysql:dbname=abcde;host=localhost;","root","root");
//
// try {
//   $db = new PDO('mysql:dbname=abcde;host=localhost;','root','root');
//   echo "接続OK！";
// } catch (PDOException $e) {
//   echo 'DB接続エラー！: ' . $e->getMessage();
// }
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."')");
// $pdo->exec("insert into contactform(name,mail,age,comments) values('".$_POST['name']."', '".$_POST['mail']."',".$_POST['age'].",'c');");


header("Location:http://localhost/4each_keijiban/index.php")

?>


<!DOCTYPE html>
<html lang=“ja”>

<head>
  <meta charset="UTF-8">
  <title>お問合わせフォームを作る</title>

  <link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body>
  <h1>お問合せフォーム</h1>

  <div class="confirm">
    <p>お問い合わせいただきありがとうございました。
      <br>3営業日以内に担当よりご連絡差し上げます。
    </p>
  </div>

</body>

  <!-- フッター -->
<footer>

</footer>

</html>


  <!-- コメント -->







