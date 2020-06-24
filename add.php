<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "travel");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
$ques = mysqli_real_escape_string($link, $_REQUEST['ques']);
$ans = mysqli_real_escape_string($link, $_REQUEST['ans']);
 
// Attempt insert query execution
$sql = "INSERT INTO faq (category, question, answer) VALUES ('$cat', '$ques', '$ans')";
if(mysqli_query($link, $sql)){
    header("location: addsucc.php");
} else{
    echo "ERROR: Could not able to execute $sql. ";
}
 
// Close connection
mysqli_close($link);
?>