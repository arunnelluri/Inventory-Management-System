<?php
$link = mysqli_connect("localhost", "root", "", "ims");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$f_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']);
$mobile_no = mysqli_real_escape_string($link, $_REQUEST['mobile_no']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$intercome = mysqli_real_escape_string($link, $_REQUEST['intercome']);

// attempt insert query execution
$sql = "INSERT INTO users (f_name,l_name, mobile_no, email,intercome) VALUES ('$f_name', '$l_name', '$mobile_no','$email','$intercome')";
if(mysqli_query($link, $sql)){
    header("Location:/arunweb/view_user_list.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>