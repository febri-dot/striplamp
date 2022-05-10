<?php
error_reporting(0);
include "connect.php";

$delete = $_GET['delete'];
// var_dump($delete);
// die;

$result = mysqli_query ($conn, "DELETE FROM datalamp");

$message = "Success deleted data";
echo 
("<script>
    alert('$message')
    window.location.replace('data.php');
</script>");

?>