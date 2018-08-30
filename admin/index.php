<?php
    include ("header.php");
    require_once('../consumer/config.php');
    $cnt = mysqli_query($con,"SELECT COUNT(*) as total_rows FROM service");
    $rows=mysqli_fetch_assoc($cnt);
    $total_rows= $rows['total_rows']; 
?>


<div class="col-md-10 float-right col-12">
    <!-- <span class="primary_title">Service Lead</span> -->
    <div id="content_data"></div>
    Total No of Lead<?php echo   $total_rows; ?>
</div>





<?php
    include ("footer.php");
?>