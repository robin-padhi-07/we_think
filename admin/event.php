<?php
    // Initialize the session
    session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:login.php");
        exit;
    }
?>
<?php
    include ("common/header.php");
?>
<div class="col-md-10 float-right col-12" id="main_wrapper">
	<div class="table-responsive  bg_white">
		<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-primary">Add New Event</button>
		<table id="user_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Image</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">					
					<h4 class="modal-title float-left">Add User</h4> <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<label>Enter First Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<br />
					<label>Enter Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >

</script>
<?php
    include ("common/footer.php");
?>