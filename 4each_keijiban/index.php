

<!DOCTYPE html>
<html lang=“ja”>

<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>

  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<!-- グローバルメニューより上 -->

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=abcde;localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

<div class="toplogo">
  <img src="4eachblog_logo.jpg">
</div>

<ul class="menu">
  <li>トップ</li>
  <li>プロフィール</li>
  <li>4eachについて</li>
  <li>登録フォーム</li>
  <li>問い合わせ</li>
  <li>その他</li>
</ul>

<!-- メニュー下の左側 -->

<div class="left_column">

<h1>プログラミングに役立つ掲示板</h1>


<form method="post" action="insert.php">

<p class="post_form">入力フォーム</p>

<div>
  <label>ハンドルネーム</label>
  <br>
  <input type="text" class="handlename" size="50" name="handlename">
</div>

<div>
  <label>タイトル</label>
  <br>
  <input type="text" class="title" size="50" name="title">
</div>
<div>
  <label>コメント</label>
  <br>
  <textarea cols="90" rows="8" name="comments"></textarea>
</div>

<div>
  <input type="submit" class="submit" value="投稿する">
</div>
</form>


<?php

while ($row = $stmt->fetch()){
  echo'<div class="kiji">';
  echo"<h3>".$row['title']."</h3>";
  echo'<div class="contents">';
  echo $row['comments'];
  echo'<div class="post_by">posted by'.$row['handlename'].'</div>';
  echo'</div>';
  echo'</div>';
}
?>

</div>

<!-- メニュー下の右側 -->

<div class="right_column">

<h2>人気の記事</h2>
<ul class="side_bar">
  <li>PHPオススメ本</li>
  <li>PHP MyAdminの使い方</li>
  <li>今人気のエディタ Top5</li>
  <li>HTMLの基礎</li>
</ul>

<h2>オススメリンク</h2>
<ul class="side_bar">
  <li>インターノウス株式会社</li>
  <li>XAMPPのダウンロード</li>
  <li>Eclipseのダウンロード</li>
  <li>Bracketsのダウンロード</li>
</ul>

<h2>カテゴリ</h2>
<ul class="side_bar">
  <li>HTML</li>
  <li>PHP</li>
  <li>MySQL</li>
  <li>JavaScript</li>
</ul>

</div>


</body>

<!-- フッター -->

<footer>
copyright © internous | 4each blog the which provides A to Z about programing.
</footer>


</html>


<!-- コメント -->




