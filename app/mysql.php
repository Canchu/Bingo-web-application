 <?php
      $dsn = 'mysql:dbname=bingoapp_DB;host=localhost;port=3306';
        $user = 'bingoapp';
        $password = 'bingoapp1025';

      try{ 
        $dbh = new PDO($dsn, $user, $password);
  
        $id1 = $_POST['id1'];
        
        $sql = "select * from bingodata where id =";

        //$hoge = '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24';
        //echo $hoge;
        //for( $i = 0; $i <= $id2-$id1; $i++){
          foreach ($dbh->query($sql.$id1) as $row);
            echo $row['num'];
           //}
        //} 
      }catch (PDOException $e){
          print('Connection failed:'.$e -> getMessgae() );
          die();
      }
      $dbh = null;
  ?>
