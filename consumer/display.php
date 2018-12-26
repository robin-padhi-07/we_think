<?php
    require_once('config.php');
    $sql = "SELECT service.*,services_list.service_name, services_list.created_at FROM `service` LEFT JOIN services_list ON service.company_name = services_list.id  ORDER BY `company_name`";
    $qry = mysqli_query($link,$sql);

?>
<div class="col-md-8 float-left mt_10 p_20 bg_white">    
    <table id="" class="table" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Service</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                if (mysqli_num_rows($qry) > 0) {
                    while($row = mysqli_fetch_assoc($qry)) {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo  $row['phone'];?></td>
                    <td><?php echo  $row['email'];?></td>
                    <td><?php echo  $row['message'];?></td>
                    <td><?php echo  $row['service_name'];?></td>
                </tr>
                <?php
                    }
                }else{
                ?>
                    <tr>
                    <td colspan="5">Data not found</td>
                    <?php
                }
                ?>
            </tbody>    
    </table>

</div>
