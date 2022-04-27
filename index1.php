<?php
error_reporting(0);  //mematikan error dihalaman 

include 'connect.php';

$btn = $_GET ['tombol'];
$state = $btn == "ON" ? "OFF" : "ON";

?>

<html>
    <form method="get" id="form">
        <?php echo '<input type="submit" name="tombol" id="btn" value="'.$state.'"/>'; ?>
        <button><a href="data.php">data</a></button>
    </form>
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

