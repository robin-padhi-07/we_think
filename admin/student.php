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
    $sql = "SELECT * FROM student ORDER BY id ASC";
?>

<div class="col-md-7 float-left col-12">
    <span class="primary_title">Student Lead</span>
    <div class="common_container">
        <?php 
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table'>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>First Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Contact</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        ?>       
    </div>    
</div>
<div class="col-md-3 float-left">
    <span class="primary_title">Student Lead</span>
    <form action='insert.php' method='post' id='myform' >
        <p>
            <input type='text' class="form-control" name='name' placeholder='user name' id='username' />
        </p>
        <p>
            <input type='text' class="form-control" name='email' placeholder='password' id='password' />
        </p>
        <p>
            <input type='text' class="form-control" name='contact' placeholder='Contact Number' id='password' />
        </p>

        <button id='insert' class="btn btn-primary">Insert</button>
        <p id='result'></p>
    </form>

</div>

<?php
    // Close connection
    mysqli_close($link);
?>

<?php
    include ("common/footer.php");
?>