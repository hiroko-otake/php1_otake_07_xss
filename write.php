<?php

// POSTを受け取る
$g_name = $_POST['g_name'];
$v_name = $_POST['v_name'];
$comment = $_POST['comment'];
$star = $_POST['star'];

// ファイルに書き込み
$time = date("Y-m-d H:i:s");
$str = $time . ',' . $g_name. ','. $v_name . ',' . $comment . ',' . $star;

//文字作成
$file = fopen('./data/data.txt','a');
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>感謝コメント入力完了</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="wrapper">
        <div class="header"><h3>感謝コメント入力完了</h3></div>
        <div class="container">
            <div class="main_text"><P>感謝コメントのご入力<br>ありがとうございました。</P></div>
            <div class="pay_link">
                <p>※ボランティア様へお礼(Tip)の支払いを希望されるゲスト様はお支払い手続きへお進みください。</p>
                <a href="#"" class="btn">お支払い手続きへ</a>
            </div>
        </div>
        <div class="footer">
            <a href="read.php">Kenさんのマイページを開く</a>
        </div>

  </body>

</html>
