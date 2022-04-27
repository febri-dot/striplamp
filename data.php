<html>
    <button><a href="test.php">back</a></button>
</html>

<?php
 include "connect.php";

 $sql = "SELECT * FROM datalamp ORDER BY id DESC";
 $result = mysqli_query($conn, $sql); 
 $i = 1;
 
 echo "<table border='1'>";
    echo "<tr>";
        echo "
            <td>ID</td>
            <td>Kondisi</td>
            <td>Hari</td>
            <td>Waktu</td>
            <td>Tanggal</td>
        ";
    echo "</tr>";
  
    while($row=$result->fetch_assoc()){
        echo "<tr>
            <td>".$i."</td>
  	        <td>".$row['kondisi']."</td>
  	        <td>".$row['hari']."</td>
            <td>".$row['waktu']."</td>
  	        <td>".$row['tanggal']."</td>
 	    </tr>";
         $i++;
    }
echo "</table>";
?>
