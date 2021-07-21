<?php
session_start();
include 'dbcon.php';

if (isset($_GET['token'])) {
   
       $token = $_GET['token'];

       $updatequery = "update registration set status ='active' where token = '$token' ";

       $query = mysqli_query($con, $updatequery);

       if ($query) {
           if(isset($_SESSION['msg'])){
       ?>
            <script>
            alert('Email verified successfully');
            </script>   
            <script>
             location.replace("login.php");
             </script>
           <?php 
           }
           else {
           ?>
            <script>
            alert('You are logged out');
            </script>   
            <script>
             location.replace("login.php");
             </script>
           <?php
           }
        }
        else {
           ?>
            <script>
            alert('Account not updated');
            </script>   
            <script>
             location.replace("register.php");
             </script>
           <?php
           }
       }
       
?>