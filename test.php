<?php
//Backend code

error_reporting(0);  //mematikan error dihalaman 

include 'connect.php';

$btn = $_GET ['tombol'];
$state = $btn == "ON" ? "OFF" : "ON";

?>

<html>
    <!-- Frontend code -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
        <title>StripLamp</title>
    </head>
    <body>
        <h1>Smart Light.</h1>
        <p class="wrapper">Make your life more easier with Smart Light</p>
        <div class="jam">
            <div id="hour">00</div>
            <span>:</span>
            <div id="minute">00</div>
            <span>:</span>
            <div id="seconds">00</div>
            <span></span>
        </div>
        <form method="get" id="form">
            <button>
                <p class="awesome"><i class="fa fa-clock"></i></p>
                <a href="data.php">Time usage</a>
            </button>
            <?php echo '<input type="submit" name="tombol" id="btn" value="'.$state.'"/>'; ?>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</html>

<?php
//Backend code 

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
    /* Style code */

    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
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
        margin-left: 430px;
        margin-top: 114px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 100px;
        line-height: 110px;
        /* identical to box height, or 110% */

        text-align: center;
        letter-spacing: 0.3px;

        color: #7E3906;

    }
    .wrapper{
        /* Make your life more easier with Smart Light */
        position: relative;
        width: 761px;
        height: 45px;
        margin-left: 340px;
        margin-top: 24px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 35px;
        line-height: 45px;
        /* identical to box height, or 129% */
        text-align: center;
        letter-spacing: 0.3px;

        color: #B6724D;
    }
    /* .jam {
    border: 2px;
    position: absolute;
    transform: translate(-50%, -50%);
    width: 735px;
    height: 150px;
    margin-left: 352px;
    margin-top: 157px;
    display: flex;
    align-items: center;
    justify-content: space-between;
} */
.jam{
    margin-left: 352px;
    margin-top: 157px;
    border: 2px;
    position: absolute;
    transform: translate(-50%, -50%);
    width: 735px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.jam div {
    position: relative;
    background-color: #E0A470;
    height: 100%;
    width: 150%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 60px;
    color: #FFFFFF;
    border-radius: 5px;
    letter-spacing: 3px;
}

.jam span {
    font-weight: bolder;
    font-size: 60px;
    color: #FFFFFF;
}
    button{
        position: absolute;
        width: 280px;
        height: 165px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 28px;;
        margin-left: 390px;
        margin-top: 120px;
    } 
    .awesome{
        position: absolute;
        font-size: 70px;
        color: #B8704F;

    }
    a{
        text-decoration: none;
        position: absolute;
        width: 121px;
        height: 30px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height, or 150% */

        letter-spacing: 0.3px;
        text-align: center;

        color: #B6724D;
    }
    input{
        position: absolute;
        width: 280px;
        height: 165px;
        margin-left: 770px;
        margin-top: 120px;

        background: rgba(255, 255, 255, 0.8);
        border-radius: 28px;
    }
    .input-value{
        
        position: absolute;
        width: 81px;
        height: 30px;
        left: 862px;
        top: 835px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height, or 150% */

        letter-spacing: 0.3px;

        color: #BF6A56;

    }
</style>

