<?php
class DB {
	//Connect to the DB method
  public function connect() {
  	$servername = "localhost";
  	$dbname = "emp_db";
  	$user = "root";
  	$pswd = "";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pswd);
    // set the PDO error mode to exception
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "hello";
    return $conn;
    }
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    return false;
    }
  }
}

?>