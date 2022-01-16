

<html>
<head>
    <meta charset="utf-8">
    <title>スコア一覧ページ</title>
</head>

<h1> ゴルフスコア記録　<h1>

<table border="1">
<?php

// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

print "<tr><th>投稿日</th><th>名　前</th><th>プレー日</th><th>コース名</th><th>天　気</th><th>スコア</th>\n";
$fp = fopen('data/data.txt','r');        
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($time,$name,$date,$course,$weather,$score) = explode("/",$line);
        print "<tr>\n";
        print "<td>$time</td><td>$name</td><td>$date</td><td>$course</td><td>$weather</td><td>$score</td>\n";
        print "</tr>\n";
    }
}
fclose($fp);
?>

</table>
<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</html>