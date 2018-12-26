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


<div class="col-md-10 float-right col-12">
    <!-- <span class="primary_title">Service Lead</span> -->
    
    <div class="col-md-3 float-left mt_20">
        <div class="common_container">
            <img src="../assets/images/leads.png" class="img_center mt_20">
            <span class="w-100 text-center font_20 semibold float-left mt_20">Total Leads</span> 
            <span class="w-100 text-center font_16 regular float-left mb_20"><?php echo   $total_rows; ?></span>            
        </div>    
        
    </div>
    
</div>





<?php
    include ("common/footer.php");
?>