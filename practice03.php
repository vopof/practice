
<html lang="ja">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> 練習03 </title>
</head>
<body>
<?php
    // 連想配列を作成します
    $array = array(
        "first" => "hogehoge",
        "second" => "fugafuga",
        "third" => "mogemoge",
        "forth" => "forforfor",
        "fifth" => "hifive!"
    );
    // foreach文を使って、key, valueをそれぞれ毎回echoするような制御構文を書いて下さい
    foreach ($array as $key => $val) {
        echo $key;
        echo ": ";
        echo $val;
        echo "<br>";
    }
?>

</body>
