<html>
<head>
	<meta charset="utf-8">
	<title>ゴルフスコア記録</title>
</head>
<body>

<h1>ゴルフスコア記録</h1>


<form action="write.php" method="post">
<table border="1">
	<tr><th>名  前:</th> <td><input type="text" name="name" placeholder="山田 太郎"></td></tr>
	<tr><th>日  付:</th> <td> <input type="text" name="date" placeholder="2022/01/01"></td></tr>
	<tr><th>コース名:</th> <td> <input type="text" name="course" placeholder="○○カントリークラブ"></td></tr>
	<tr><th>天　気:</th> <td> <input type="text" name="weather" placeholder="晴れ"></td></tr>
	<tr><th>ス コ ア:</th> <td> <input type="text" name="score" placeholder="XXX"></td></tr>
</table>
	<p><input type="submit" value="送信"></p>
</form>



<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>