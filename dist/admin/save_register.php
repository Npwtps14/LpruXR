<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lprux";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($_POST['s_group'] !="" &&  
$_POST['term'] !="" && 
$_POST['subject_id'] !="" && 
$_POST['user_id'] !="" ){
$sql = "INSERT INTO register (
  r_id,
  s_group,
  term,
  subject_id,
  user_id)
 VALUES (NULL,
   '$_POST[s_group]', 
   '$_POST[term]', 
   '$_POST[subject_id]', 
   '$_POST[user_id]')";

if (mysqli_query($conn, $sql)) {
    echo "<meta http-equiv='refresh' content='2;url=add_register.php' />";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}else{
  echo "<meta http-equiv='refresh' content='2;url=add_register.php' />";
}

mysqli_close($conn);
?>