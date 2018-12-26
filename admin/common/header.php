<?php  
    include("config.php");
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" href="assets/css/common.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/utilities.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">    
  
  <link rel="icon" type="image/png" sizes="27x27" href="assets/images/favicon.png">
  <title>Admin :: Welcome</title>
</head>
<body>
<div class="top_header">
  <div class="container main_container">
    <span class="top_logo"> <img src="assets/images/logo.png" alt="" class="float-left"> </span>
    <ul class="top_navigation">
      <li>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?> </li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<div class="col-md-2 float-left col-12">
    <div class="side_container">
        <div class="col-12 float-left no-padding">
            <ul class="side_navigation">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="lead.php">Service Lead</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="student.php">Student List</a></li>
            </ul>
        </div>
    </div>
</div>



<!-- Top header end -->