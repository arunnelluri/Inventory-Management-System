<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$spare_name = mysqli_real_escape_string($link, $_REQUEST['submit']);


// attempt insert query execution
$sql = "DELETE FROM `spare` WHERE spare_name ='$spare_name'";
if(mysqli_query($link, $sql)){
    header("Location:/arunweb/view_spare.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>