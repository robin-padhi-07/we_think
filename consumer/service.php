 <?php 
include ("header.php");


include("/config.php");
     

$service_list=array();
$sql="SELECT id, service_name,status FROM services_list";
 $query=mysqli_query($con, $sql);
 if(mysqli_num_rows( $query)>0){ $i=0;
   while( $row=mysqli_fetch_assoc($query)){
      
       //$service_list[$row["id"]]=$row["service_name"]. " Rs.(".$row["status"].")";
       $service_list[$i]['id']=$row["id"];
       $service_list[$i]['service_name']=$row["service_name"];
       $service_list[$i]['status']=$row["status"];
       $i++;
   }     
 }
//print_r( $service_list); die("Asdf");
?>

     



<div class="float-left w-100 bg_white">
    <h1 class="slider_title text-center mb_20 mt_20">Choose Service </h1>

    <div class="container main_container pb_20 pt_20">
        
    <form class="service_lead" method="POST" id="form_register">
    <span id="message"></span>
        <div class="row">
            <div class="form-group col-md-4 float-left col-12">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" required>
            </div>
            <div class="form-group col-md-4 float-left col-12">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 float-left col-12">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-4 float-left col-12">
                <input type="" name="company_name" id="" class="form-control" placeholder="Company Name">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 float-left">
                <select name="service" id="" class="form-control">
                <option value="">Chosse Service</option>
                  <?php foreach($service_list as $service) { ?> 
                
                   <option value="<?php echo   $service['id']; ?>"> <?php echo  $service['service_name']; ?>(<?php echo  $service['status']; ?> )</option>
                   <!-- <option value="<?php echo   $service['id']; ?>"> <?php echo  $service['service_name']; ?></option> -->
                  <?php  } ?>
                    
                    
                </select>
            </div>
        </div>
        <div class="col-md-12 float-left no-padding">
            <input type="submit" class="primary_btn btn btn-info" id="send_service" name="submit">
        </div>
    </form>
    </div>
</div>

<?php
include ("footer.php")

?>