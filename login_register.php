<?php

require('dbcon.php');
session_start();
//for login
if(isset($_POST['login']))
{
    $query="SELECT * FROM `registeredusers` WHERE `email`= '$_POST[email_username]' OR `username`= '$_POST[email_username]'";
   $result= mysqli_query($con,$query);
   if($result)
   { 
        if(mysqli_num_rows($result)==1)
        {
           $result_fetch=mysqli_fetch_assoc($result);
           if(password_verify($_POST['password'], $result_fetch['password']))
           {
            $_SESSION['logged_in']=true;
            $_SESSION['username']=$result_fetch['username'];
            header("location: index.php");
           }
           else{
            echo"
            <script>
            alert('Incorrect password');
            window.location.href= 'login.php';</script>
       
            ";
           }
        }
        else
        {
            echo"
            <script>
            alert('Email or username not registered');
            window.location.href= 'login.php';</script>
       
            ";
        }
   }
   else
   {
    echo"
    <script>
    alert('Cannot run query');
    window.location.href= 'login.php';</script>

    ";

   }
}



//for register

if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `registeredusers` WHERE `username`='$_POST[username]' OR `email` = '$_POST[email]' ";
    $result= mysqli_query($con, $user_exist_query);

    if($result){
        if(mysqli_num_rows($result)>0){
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                echo"<script>
        alert('$result_fetch[username] - Useranme already taken');
        window.location.href= 'signup.php'; </script>
        ";
            }
       else
       {
        echo"<script>
        alert('$result_fetch[email] - Eamil already exists');
        window.location.href= 'signup.php';</script>
        ";
       }
       }
       else{
        
        $password=password_hash($_POST['password'], PASSWORD_BCRYPT);

        $query ="INSERT INTO `registeredusers`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";

        if(mysqli_query($con,  $query))
        {
            echo"
            <script>
            alert('Registartion successfull');
            window.location.href= 'login.php';</script>
       
            ";
        }else
        {
            echo"
            <script>
            alert('Cannot run query');
            window.location.href= 'index.php';</script>
       
            ";
        }

       }


    }
    else
    {
        echo"
        <script>
        alert('Cannot run query');
        window.location.href= 'index.php';</script>
   
        ";
    }
}

?>