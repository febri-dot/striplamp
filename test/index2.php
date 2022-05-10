<?php
error_reporting(0);  //mematikan error dihalaman 

include 'connect.php';

$btn = $_GET ['tombol'];
$state = $btn == "ON" ? "OFF" : "ON";

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">
        <title>StripLamp</title>
    </head>
    <body>
        <div id="right">
            <!-- Right side -->
            <img src="images/BG-Images.png" alt="">
        </div>
        <main>
            <h1>Smart Light.</h1>
            <p>Make your life more easier with Smart Light</p>
            <div class="jam">
                <div id="hour">00</div>
                <span>:</span>
                <div id="minute">00</div>
                <span>:</span>
                <div id="seconds">00</div>
                <span></span>
            </div>
            <form method="get" id="form">
                <?php echo '<input type="submit" name="tombol" id="btn" value="'.$state.'"/>'; ?>
                <button><a href="data.php">data</a></button>
            </form>
        </main>
    </body>
    <script src="script.js"></script>
</html>

<?php
//Function mendapatkan nama hari dalam Bahasa Indonesia
$today = day();
function day(){
	$today = date ("D");
	switch($today){
		case 'Sun':
			$today = "Minggu";
		break;
		case 'Mon':			
			$today = "Senin";
		break;
		case 'Tue':
			$today = "Selasa";
		break;
		case 'Wed':
			$today = "Rabu";
		break;
		case 'Thu':
			$today = "Kamis";
		break;
		case 'Fri':
			$today = "Jumat";
		break;
		case 'Sat':
			$today = "Sabtu";
		break;
		default:
			$today = "Unknown";		
		break;
	}
	return  $today;
}

//function untuk memperoleh data waktu WIB
date_default_timezone_set('Asia/jakarta');
$time = time();
$time = date("H:i:s", $time);

//Function mendapatkan tanggal 
$day = date('d-m-Y');
// var_dump($day);
// die;

//input data ke database
$query = "INSERT INTO  datalamp (kondisi, hari, waktu, tanggal) VALUES ('$btn', '$today','$time','$day')";

if(isset($btn)) {
    $result = mysqli_query($conn, $query);
    echo "$btn";
}
?>

<style>
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        height: auto;
        background-color: #FFE2C0;
    }
    img {
        position: absolute;
width: 1171px;
height: 1024px;
left: 315px;
top: 0px;
    }

    

</style>

