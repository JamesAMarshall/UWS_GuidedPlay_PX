<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"SELECT username FROM pa2004_Accounts WHERE username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   mysqli_close($db);

   $login_session = $row['username'];
   
   if(!isset($_SESSION['username'])){
        session_unset(); 
        header("location: ../../index.php");
        die();
   }
?>