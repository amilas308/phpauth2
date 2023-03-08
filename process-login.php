 <?php
    $name = $_POST['name'];
    $pass = $_POST['password'];
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            echo 'Name is required';
        }
        if(empty($_POST['password'])){
            echo 'Password is required';
        }
        if(count(str_split($_POST['password'])) < 8){
            die('password is not enough');
        }
        if(!preg_match('/[0-9]/', $_POST['password'])){
            die('Password has no number');
        }
        if(!preg_match('/[a-z]/i', $_POST['password'])){
            die('password has no alphabet');
        }
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump($_POST);
    }
    $mysqli = require __DIR__ . '/database.php';
    $sql = "INSERT INTO `login`(`name`, `password`) VALUES('$name', '$password_hash')";
    if(mysqli_query($conn, $sql)){
        echo 'Login Successfully';
    }
 
 
 ?>