
<?php

include ('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

//autentikasi username dan password di database
$query = "select * from SL_user where username = '".$username."' and password = '".$password."'";

if ( !isset($_POST['username'], $_POST['password']) ) {

	exit('Please fill both the username and password fields!');
}

//Menjalankan query
$result = mysqli_query($conn, $query);

//Menampilkan pesan hasil 
if (mysqli_num_rows($result) > 0) {
    header("location:home.php");
}else {
    $message = "Invalid Username or Password!";
    echo 
    ("<script>
        alert('$message')
        window.location.replace('index.php');
    </script>");
}



