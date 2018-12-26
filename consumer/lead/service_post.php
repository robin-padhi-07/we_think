<?php
     include("../config.php");

     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $comname = $_POST['company_name'];
     $service = $_POST['service'];

     $strsql = "INSERT INTO service VALUES(null, '$name', '$phone', '$email', '$comname', '$service')";
     
    if(mysqli_query($link,$strsql)){
        echo "Thank you for contacting us – we will get back to you soon!";
    }else{
        echo mysqli_error();
    }

?>