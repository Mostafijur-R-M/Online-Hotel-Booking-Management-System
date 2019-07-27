<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "habhit");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$roomoption = mysqli_real_escape_string($link, $_REQUEST['roomoption']);
$guestnum = mysqli_real_escape_string($link, $_REQUEST['guestnum']);
$arraival = mysqli_real_escape_string($link, $_REQUEST['arraival']);
$aeparture = mysqli_real_escape_string($link, $_REQUEST['aeparture']);
$specialreq = mysqli_real_escape_string($link, $_REQUEST['specialreq']);
 
// Attempt insert query execution
$sql = "INSERT INTO reservation (fullname, email, roomoption, guestnum, arraival, aeparture, specialreq) VALUES ('$fullname', '$email', '$roomoption', '$guestnum', '$arraival', '$aeparture', '$specialreq')";
if(mysqli_query($link, $sql)){
    echo "Thank you sir! Your booking is successfully done. Have a nice day";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>