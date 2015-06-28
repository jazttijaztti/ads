<?php

try{
    $dbh = new PDO('mysql: host=localhost;dbname=jonah_data','root','root');
      }catch(PDOException $e){
	var_dump($e->getMessage());
	exit;

}


echo "Success"

?>
