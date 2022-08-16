<?php
include ("db_connect.php");
?>
<?php
if (isset($_POST['submit']))  
   {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM signup WHERE email ='$email' and password ='$password'";
    $query=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($query);

    if($num >0){
       header("location:home.php");
    }
    else{
        echo '<script>alert("email and password is not matching")</script>';

    }

    
   } 
   ?> 
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <style>
    body{
    background-color: grey;
    /* align-items: center; */
    display: flex;
}
form{
    width: 350px;
    height: 250px;
    border: 3px solid rgb(181, 159, 202);
    padding: 20px;
   margin-top: 100px;
   margin-left: 450px;
   /* display: inline-block; */
   border-radius: 2px;
   background-color: aliceblue;

}
label{
   width:100px;
   display:inline-block;
   margin-left:20px;
   margin-top:20px;
}
/* input{
    display: block;
    border: 2px solid #ccc; 
    width: 65%;
    padding: 10px;
    border-radius: 2px;
} */
button{
    margin-left: 150px;
    margin-top:20px;

}
 </style>
<body>
   <form  action="login.php" method="post">
    <h2>  LOGIN FORM</h2>
    
     <label for=""> Email:</label>
     <input type="text" name="email" placeholder="Email">
     <br><br>
     <label for="">Password:</label>
     <input type="password" name="password" placeholder="Password"> 
     <br>
     <br>
     <button type="submit" name="submit"> Login</button>
   </form> 
</body>
</html> 
