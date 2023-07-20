<?php
require './connection.php';
if (isset($_POST['LoginButton'])) {
    $name=$_POST['name'];
    $password=$_POST['password'];
    if (!empty($_POST['name']) &&!empty($_POST['password'])){
        $login=SIMPLE::login($name, $password);
}else{
    echo "All the field are required!";
}
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv"X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form</title>
</head>
<body>
    <style> 
   .form form{
        width: 230px;
        height: 250px;
    }
       
</style>
    <div class="main">
        <div class="content">
            <div class="form">
                <form action="">
                    <div class="inputBox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="password" name="password" placeholder="Enter your password">
                    </div>
                   

                <div class="login">
                    <a href="./index.php">"Don't have any account? Sign in"</a>
                </div>
                <div class= "SubmitButton"> 
                <input type="submit" value="Login" name="LoginButton">
             </form>
</div>
</div>
</div>
</body>
</html>

