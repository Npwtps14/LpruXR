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

$sql = "INSERT INTO student (id, student_id,sect ,student_name ,birthday ,address ,email ,status )
VALUES (NULL, '$_POST[student_id]','$_POST[sect]', '$_POST[student_name]', '$_POST[birthday]', '$_POST[address]', '$_POST[email]',  '$_POST[status]')";

if (mysqli_query($conn, $sql)) {
    echo "<meta http-equiv='refresh' content='2;url=add_student.php' />";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>