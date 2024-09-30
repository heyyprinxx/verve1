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
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    body{
        background-image:url(ab1.png);
    }
.wrapper
{
 background-color:red(255, 255, 255, 0.858);
 height:95vh;
 border-radius:23px;
 width:80vh;
 padding:40px;
 align-items: center;
 display: flex;
 flex-direction: column;
 justify-content: center;
 margin-left:44%;
 margin-top:2%;
 margin-bottom: 2%;
 border:none;
 
 }

h1{
    font-size:35px;
    padding:3px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-bottom:10px;
}
form{
    width:min(400px,100%);
    margin-top: 10px;
    margin-bottom:12px;
    gap:10px;
    display: flex;
    flex-direction:column;
    align-items: center;
}
form > div{
    display: flex;
    justify-content:center;
    padding:4px;
    
    
}
form label{
    padding: 5px;
    font-size: 16px;
    height:10px;
    margin-left:5px;
    margin-right:20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

form input{
    box-sizing:border-box;
    width:200px;
    padding: 6px;
    background-color: rgb(176, 211, 227);
    justify-content: center;
    border-radius:7px;
    border:2px;
}
form input:hover{
    background-color: rgb(231, 222, 160);
}

form input::placeholder
{
 color:darkblue;
}

p{
   font-size:15px;
}
.alert{
    padding:1px;
    margin:0px;
}
    </style>
    </head>
    <body>
        <div class="wrapper">
            <?php
            if(isset($_POST["submit"]))
            {
               $Firstname=$_POST["fname"];
               $Lastname=$_POST["lname"];
               $Email=$_POST["email"];
               $Password=$_POST["password"];
               $Repeat_password=$_POST["confirm_password"];
               $error=array();

               $Passwordhash=password_hash($Password, PASSWORD_DEFAULT);

               if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                array_push($error,"email is not valid");
               }

               if(strlen($Password)<6){
                array_push($error,"password must contain atleast 6 characters");
               }
               if($Password!==$Repeat_password)
               {
                array_push($error,"password does not match");
               }
               //ensuring no duplicacy of the email account
               require_once "databse.php";
               $sql="SELECT * FROM users WHERE email= '$Email'";
               $result=mysqli_query($con,$sql);
               $rows_count=mysqli_num_rows($result);
               if($rows_count>0){
                array_push($error,"Email already exists");
               }
               
               if(count($error)>0)
               {
                foreach($error as $value)
                {
                    echo "<div class='alert alert-danger'>$value</div>";
                }
               }
               else{
                $sql="INSERT INTO users(fname, lname, email, password) VALUES( ?, ?, ?, ?)";
                $stmt=mysqli_stmt_init($con);
                $prepare_stmt=mysqli_stmt_prepare($stmt,$sql);
                if($prepare_stmt)
                {
                    mysqli_stmt_bind_param($stmt,"ssss",$Firstname,$Lastname,$Email,$Passwordhash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully!</div>";
                }
                else{
                    die("oops!something went wrong.");
                }
               }
               
            }
            ?>
            
        <h1><b>Sign In</b></h1>
            <form action="register.php" method="post">
                    <div>
                        <label>Firstname</label>
                        <input type="text" name="fname" placeholder="firstname" required="required">
                    </div>
                    <div>
                        <label>Lastname</label>
                        <input type="text" name="lname" placeholder="lastname" required="required">
                    </div>
                    <div>
                        <label>Email Id</label>
                        <input type="email" name="email" placeholder="email" required="required">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password" required="required">
                    </div>
                    <div>
                        <label>Confirm</label>
                        <input type="password" name="confirm_password" placeholder="confirm password" required="required">
                    </div>
                    <div class="form-btn">
                    <input type="submit" name="submit" value="Sign In" class="btn btn-primary"><br>
                 </div>
                </form>
                <p>Already have an account?<a href="login.php">Login</a></p>
                </div>
    </body>
</html>