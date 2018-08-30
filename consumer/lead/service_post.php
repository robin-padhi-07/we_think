<?php
     include("../config.php");
     

    
      
      // mysql_connect("localhost","root", "");
       //mysql_select_db("we_think");

       // print_r($_POST);
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $comname = $_POST['company_name'];
     $service = $_POST['service'];


     $strsql = "INSERT INTO service VALUES(null, '$name', '$phone', '$email', '$comname', '$service')";
     
    if(mysqli_query($con,$strsql)){
        echo "Thank you for contacting us – we will get back to you soon!";
    }else{
        echo mysqli_error();
    }

?>