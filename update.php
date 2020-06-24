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
 
// Attempt update query execution
$sql = "UPDATE faq SET answer='$ans' WHERE question='$ques'";
if(mysqli_query($link, $sql)){
   header("location: updsucc.php");
} else {
    echo "ERROR: Could not able to execute $sql. ";
}
 
// Close connection
mysqli_close($link);
?>