<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Login Page - Smart Light</title>
</head>

<style>
    body {
        position: relative;
        width: auto;
        height: auto;
        background: #FFE2C0;

    }
    .header-login h1 {
        width: 500px;
        height: 145px;
        margin-left: 445px;
        margin-top: 25px;
        font-family: Poppins;
        font-weight: bold;
        font-size: 40px;
        line-height: 75px;
        text-align: center;
        color: #7E3906;
    }
    #card {
        position: relative;
        width: 500px;
        height: 450px;
        margin-left: 445px;
        margin-top: 20px;

        background: #FFFCFC;
        border-radius: 30px;
    }
    #card-title {
        padding-top: 32px;
        font-family: Poppins;
        font-weight: bold;
        font-size: 35px;
        line-height: 52px;
        /* identical to box height */

        text-align: center;
        color: #000000;
    }
    .input-field, textarea {
        border: none;
        outline: none;
        background: rgba(196, 196, 196, 0.5);
        border-radius: 20px;
        width: 400px;
        height: 90px;
        margin-top: 33px;
        margin-left: 50px;
        padding-left: 35px;
        padding-top: 0px;

        /* Font */
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-size: 22px;
        line-height: 26px;
        /* identical to box height */
        color: rgba(0, 0, 0, 0.5);
    }
    #login {
        background-color: #B6724D;
        width: 150px;
        height: 60px;
        margin-left: 170px;
        margin-top: 41px;
        border-radius: 10px;
        border-style: none;
    }
    #labellogin {
        width: 60px;
        height: 30px;

        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height */

        text-align: center;
        color: #FFFFFF;
    }
    .animete_slideInDown{
        --animate-duration: 80s;
        --animate-delay: 30s;

    }

</style>

<body>
<div class="header-login">
        <div class="wrapper">
            <h1>
                Welcome to Smart Light. Please login first!
            </h1>
        </div>
    </div>
    <div id="card" class="animate__animated  animate__slideInDown">
        <div id="card-title">
            <h2>Log In</h2>
        </div>
        <form action="login_process.php" method="post">
                <div class="form-content">
                    <input type="text" placeholder="username" name="username" class="input-field">                                                                
                </div>
                <div class="form-content">
                    <input type="password" placeholder="password" name="password" class="input-field">
                </div>
                <button type="submit" name="login" id="login"><a for="button" id="labellogin">Log In</a></button>
        </form>
    </div>
</body>

</html>