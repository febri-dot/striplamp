<?php 
    error_reporting(0);
    include "connect.php";
        
    $hapus = $_GET ['delete'];

    $sql = "SELECT * FROM datalamp ORDER BY id DESC";
    $result = mysqli_query($conn, $sql); 
?>

<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

    <body>
        
        <h1>Datalog</h1>
        <a class="btn" href="index.php" role="button" id="btn-back">
            <p class="label-back">Back</p>
        </a>
        <form method="GET" action="delete.php">
            <a class="btn" id="btn-del" name="delete" href='delete.php' role="button">
                <p class="label-del">Clear</p>
            </a>
        </form>
        <table >
                <th>ID</th>
                <th>Kondisi</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Tanggal</th>
                <?php
                    $i = 1;
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
                ?>
        </table>
    </body>
</html>

<style>
    body{
        position: relative;
        width: auto;
        height: auto;
        background: #FFE2C0;
    }
    h1{
        /* Smart Light */
        position: relative;
        width: 607px;
        height: 110px;
        /* margin-left : 200px;
        margin-top: 25px; */
        left: 472px;
        top: 30px;
        color: #7E3906;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 100px;
        line-height: 110px;
    }
    table th{
        background: #FFFFFF;
    }
    table tr{
        align-items: center;
    }
    table{
        font-family: 'Poppins';
        font-style: normal;
      
        border-color: #7E3906;

        width: 850px;
        height: auto;
        /* border: 2px; */
        position: absolute;
        left: 258px;
        top: 240px;
        text-align: center;
        color: #7E3906;
        
    }
    td {
        border-right: 2px solid;
    }
    tr:nth-child(even) {
        background-color: #E0A470;
    }
    #btn-back{
        /* BACK */
        position: absolute;
        width: 90px;
        height: 40px;
        left: 258px;
        top: 170px;
        background: #FFFFFF;
        color: #7E3906;
        border-radius: 10px;
        border : 0px;
    }
    .label-back{
        font-family: 'Poppins';
        font-style: normal;
        text-decoration:none;
        font-weight: 400;
        font-size: 20px;
        color: #B6724D;
    }
    #btn-del{
        /* CLEAR DATA */
        position: absolute;
        width: 90px;
        height: 40px;
        left: 1015px;
        top: 170px;
        color: #7E3906;
        background: #FFFFFF;
        border-radius: 10px;
        border : 0px;
    }
    .label-del{
        font-family: 'Poppins';
        font-style: normal;
        text-decoration:none;
        font-weight: 400;
        font-size: 20px;
        color: #B6724D;
    }
</style>
