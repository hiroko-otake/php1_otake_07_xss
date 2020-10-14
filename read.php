<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おりぼら！マイページ</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
<div class="wrapper">
    <div class="header"><h3>おりぼら！マイページ</h3></div>
    <div class="container">
        <div class="left">
           <img src="img/gazo.jpg" alt="KEN様の画像" width="80px">
        </div>
        <div class="right">
           <p>Hi, My name is Ken.</p>
           <P>Welcome to</P>
           <P>Tokyo Olympics!!</P>
        </div>
    </div>
    <div class="evaluation">
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th width="50%">感謝コメント</th>
            <th width="25%">星の数</th>
            <th width="25%">ゲスト様</th>
        </tr>

<?php

// XSS対応
function h ($value) {
  return htmlspecialchars($value,ENT_QUOTES);
  }

// ファイルを開く
$openFile = fopen('./data/data.txt','r');

// ファイル内容を1行ずつ読み込んで出力
while ($str_base = fgets($openFile)) {
    $str = explode(",", $str_base);
    if($str[4] == 1){
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '★' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    } elseif($str[4] == 2) {
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '★★' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    } elseif($str[4] == 3) {
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '★★★' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    } elseif($str[4] == 4) {
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '★★★★' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    } elseif($str[4] == 5) {
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '★★★★★' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    } else {
      echo '<tr>';
      echo '<td>'.h($str[3]).'</td>';
      echo '<td>'. '' .'</td>';
      echo '<td>'.h($str[1]).'</td>';
      echo '</tr>';
    }
  }

// ファイルを閉じる
fclose($openFile);

?>

</div>
</body>
</html>

