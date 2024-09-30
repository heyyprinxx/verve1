<?php
session_start(); 
if(isset( $_SESSION["user"]))
{
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    *{
        margin:0;
        padding:0;
    }

   body{
    background-image: url(ab1.png);
   }
    .wrapper{
        background-color:rgb(red);
        box-shadow:100%;
        height:530px;
        width:450px;
        margin-left:540px;
        margin-right:340px;
        margin-top:20px;
        border-radius:15px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h1{
        font-size:30px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding:40px;
        text-align: center;
        margin-top: 30px;
    }
    form{
        padding:3px;
        margin: top 6px;
        margin-left:50px;
        margin-bottom:20px;
        
    }
    form input{
        border:none;
        box-sizing: border-box;
        padding:7px;
        margin:12px;
        width:80%;
        background-color: rgb(176, 211, 227);
        border-radius: 6px;
    }

    form input:hover{
    background-color: rgb(231, 222, 160);
}

    form input::placeholder{
        color:darkblue;
    }
    form label{
        font-size:15px;
        margin-left:20px;
    }
   
   
    .final{
        font-size:15px;
        margin-left:30px;
    }
    .alert{
    padding:1px;
    margin:2px;
}
</style>
</head>
<body>

    <div class="wrapper">
        <?php
        if(isset($_POST["login"])){
            $email=$_POST["email"];
            $Password=$_POST["password"];

            require_once "databse.php";
            $sql="SELECT * FROM users where email= '$email'";
            $result=mysqli_query($con,$sql);
            $user=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user)
            { 
                if(password_verify($Password, $user["password"])){
                    session_start(); 
                    $_SESSION["user"] = "yes";
                    header("Location: home.php");
                    die();
                }
                else{
                    echo "<div class='alert alert-danger'>Password do not match</div>";  
                }
            }
            else{
                echo "<div class='alert alert-danger'>Not such Email exist</div>";
            }

        }
        ?>
        <h1>LOGIN</h1>
    <form method="post" action="login.php">
        <div class="mb-3">
          <label for="email" class="form-label">Email Id :</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="enter email" required="required">
            
        </div>
        <div class="mb-3">
          <label for="passwd" class="form-label">Password :</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="enter password" required="required">
          </div>
        </div>
        <div class="form-btn">
        <input type="submit" name="login" class="btn btn-info" value="Login"><br><br>
        </div>
        <p class="final">Don't have a account?<a href="register.php">Sign Up</a></p>
        </div>
    
    
    
</body>
</html>