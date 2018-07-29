<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$emp = mysqli_real_escape_string($link, $_REQUEST['emp']);
$divi = mysqli_real_escape_string($link, $_REQUEST['div']);
$sec = mysqli_real_escape_string($link, $_REQUEST['sec']);



// attempt insert query execution
$sql = "INSERT INTO department (emp, divi, sec) VALUES ('$emp', '$divi', '$sec')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
