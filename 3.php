<?php
	$servername = "localhost";
    $username = "mysql";
    $password = "mysql";

    try {
        $conn = new PDO("mysql:host=$servername; soleyevu_qeinvest", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
	
	// Вытаскиваем последнюю запись
	$stm = $conn->prepare("SELECT * FROM `products` ORDER BY id DESC LIMIT 1"); 
    $stm->execute();
    $res = $stm->setFetchMode(PDO::FETCH_ASSOC); 
	
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
foreach($stm->fetchAll() as $k=>$vm) {
	echo $vm['text'];
}
?>
