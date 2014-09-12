<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP TEST</title>
</head>

<?php

$dsn = 'mysql:dbname=bingoapp_DB;host=localhost;port=3306';
$user = 'bingoapp';
$password = 'bingoapp1025';


try{

	//MySQLへ接続
	$dbh = new PDO($dsn, $user, $password);
	
	$start = $_POST['IDstart'];
	$end = $_POST['IDend'];
	//$dbh->query('SET NAMES sjis');
	//print($_POST['ID']);

	$sql = "select * from bingodata where id =";

	for( $i = $start; $i <= $end; $i++){
		foreach ($dbh->query($sql.$i) as $row){
			//print($row['id'] );
			print($row['num'].'<br>');
		}
	}	

}catch (PDOException $e){

	print('Connection failed:'.$e -> getMessgae() );
	die();
}

$dbh = null;
?>

<script>
	console.log(<?php print($start); ?>);
	console.log(<?php print($end); ?>);
</script>




</body>



</html>
