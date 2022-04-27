<?php
include 'connect.php';

$query = "SELECT kondisi FROM (datalamp) ORDER BY id desc";

$result = mysqli_query($conn, $query);
if($result -> num_rows > 0) {
    $data = mysqli_fetch_row($result);
     echo $data [0];
}
?>