<?php

//inputフォームからのデータを受け取る
$name = $_POST['name'];
$date = $_POST['date'];
$course = $_POST['course'];
$weather = $_POST['weather'];
$score = $_POST['score'];

//文字作成(日付)
$time = date("y-m-d h:i:s");
$str = $time."/". $name."/". $date."/". $course."/".$weather."/".$score;

//File書き込み
$file = fopen('data/data.txt','a'); //ファイルを開く
fwrite($file,$str."\n"); //書き込み
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>