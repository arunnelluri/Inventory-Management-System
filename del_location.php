<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$location = mysqli_real_escape_string($link, $_REQUEST['submit']);


// attempt insert query execution
$sql = "DELETE FROM `location` WHERE location ='$location'";
if(mysqli_query($link, $sql)){
    echo "Records Deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
