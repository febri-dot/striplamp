<?php
include "connect.php";


// public function truncateTable() {
// 	$sql = 'TRUNCATE TABLE datalamp';
// 	return $this->pdo->exec($sql);
$delete = $_GET['delete'];
// var_dump($delete);
// die;



$result = mysqli_query ($conn, "DELETE FROM datalamp'");
var_dump($result);
die;
// header('location:data.php');
echo "SUCCESS DELETED DATA SISWA 
    <br>
    <button><a href='data.php'>back</a></button>";




?>