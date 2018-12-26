<?php
    // Initialize the session
    session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>
<?php
    include ("common/header.php");
    require_once('common/config.php');
    $link = mysqli_query($link,"SELECT COUNT(*) as total_rows FROM service");
    $rows=mysqli_fetch_assoc($link);
    $total_rows= $rows['total_rows']; 
?>
<div class="col-md-10 float-right col-12" id="main_wrapper">
    <div id="content_data"></div>
</div>

<?php
    include ("common/footer.php");
?>