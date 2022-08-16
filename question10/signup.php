<?php

include ("db_connect.php");
?>
<?php
if (isset($_POST['signup']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
        $firstname_error = "Name must contain only alphabets and space";
        } 
        if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
            $lastname_error = "Name must contain only alphabets and space";
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $email_error = "Please Enter Valid Email ID";
                } if(strlen($mobile) < 10) {
                    $mobile_error = "Mobile number must be minimum of 10 characters";
                    } 
                    if(strlen($password) < 6) {
                        $password_error = "Password must be minimum of 6 characters";
                        } 
                        if($password != $confirmpassword) {
                            $confirmpassword_error = "Password and Confirm Password doesn't match";
                            } 

    $sql ="SELECT * FROM signup WHERE email ='$email'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);

    if($num >0){
        echo '<script> alert("please fill all the details")</script>';
    }
    else{
        $insert= "INSERT INTO signup(firstname,lastname,email,mobile,password,confirm_password) VALUES('$firstname','$lastname','$email','$mobile','$password','$confirmpassword')";
        mysqli_query($conn,$insert);
        echo '<script>alert("data added successfully")</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<style>
body{
  background-color:skyblue;
}
form{
    background-color: aliceblue;
    width:500px;
    height:550px;
    margin-top:20px;
    margin-left:450px;
}
label{
   width:150px;
   display:inline-block;
   margin-left:20px;
   margin-top:40px;
}

h4{
    margin-left:230px;
    margin-top:20px;
}
#btn3{
    margin-left:200px; 
    margin-top:30px;
}
#btn3:hover{
    background-color: green;
}
H1{
    color:red;
}



</style>
<body>
  <center>
    <h1>SIGNUP FORM</h1>
  </center>


    <form action="" method="post">
   
  
  <label for="">  First Name:</label>
  <input type="text" name="firstname" placeholder="firstname">
  <!-- <span class="text-danger"><?php if (isset($firstname_error)) echo $firstname_error; ?></span> -->
  <br><br>
  <label for="">Last Name:</label>
  <input type="text" name="lastname" placeholder=" lastname">
  <!-- <span class="text-danger"><?php if (isset($lastname_error)) echo $lastname_error; ?></span> -->
  <br><br>
  <label for="">Email:</label>
  <input type="text" name="email" placeholder=" email">
  <!-- <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span> -->
  <br><br>
  <label for="">Mobile:</label>
  <input type="number" name="mobile" placeholder=" mobile">
  <!-- <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span> -->
  <br><br>
  <label for="">Password:</label>
  <input type="password" name="password" placeholder="password">
  <!-- <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span> -->
  <br><br>
  <label for=""> Confirm password:</label>
  <input type="password" name="confirmpassword" placeholder="confirm password">
  <!-- <span class="text-danger"><?php if (isset($confirmpassword_error)) echo $confirmpassword_error; ?></span> -->
  <br><br>
  <button  id="btn3" type="submit" name="signup">signup</button>
  <a href="login.php">login</a>
  

  
  </form>


</body>
</html>