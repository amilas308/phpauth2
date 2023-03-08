<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/scss/_icons.scss">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/metadata/icons.yml">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/scss/_animated.scss">
    <!-- <script src="https://kit.fontawesome.com/115ab8aa18.js" crossorigin="anonymous"></script> -->
    <title>Login Form</title>
</head>
<body>
    <img class="wave" src="./image/dark.png" alt="uni">
   <div class="container">
    <div class="img"></div>
    <div class="login-container">
        <form action="process-login.php" method="POST" enctype="multipart/form-data">
            <img class="avatar" src="./image/avatar.svg" alt="avatar">
            <h2>Irashay</h2>
            <div class="input-div one focus">
                <div class="i">
                    <!-- <i class="fab fa-twitter"></i> -->
                    <!-- <i class="fab fa-instagram" aria-hidden="true"></i> -->
                    <i style="color: #fff;" class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Username</h5>
                    <input type="text" name="name" class="input">
                </div>
            </div>
            <div class="input-div two focus">
                <div class="i">
                    <i style="color: #fff;" class="fas fa-lock"></i>
                </div>
                <div>
                    <h5>Password</h5>
                    <input type="password" name="password" class="input">
                </div>
            </div>
            <a href="#">Forgot Password?</a>
            <input type="submit" value="Submit" name="submit" class="btn">
        </form>
    </div>
   </div> 
   <script src="./fontawesome-free-5.15.4-web/js/all.js"></script>
   <script src="./main.js"></script>
</body>
</html>