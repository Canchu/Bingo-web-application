<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$link = mysql_connect('localhost', 'bingo', 'fukushi1025');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

// MySQLに対する処理

$db_selected = mysql_select_db('test_DB',$link);
if(!$db_selected){
	die('データベース選択失敗。'.mysql_error());
}
echo 'データベース選択に成功しました。';

$result = mysql_query('SELECT * FROM test');
if(!$result){
	die('クエリー失敗。'.mysql_error());
}

while($row = mysql_fetch_assoc($result)){
	print('id='.$row['id']);
	print('name='.$row['name']);
	print('value='.$row['value']);
	print('<br>');
}

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}

?>
</body>
</html>