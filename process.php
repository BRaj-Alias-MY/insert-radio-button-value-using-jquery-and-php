<?php
$mysqli = new mysqli("localhost", "root", "root", "test_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//getting gender from previous page through jquery
$gender = $_POST['gender'];
$result = $mysqli->query("insert tbl_gender(gender) values('".$gender."')");
if($result)
echo "Gender Inserted Successfully!";
else
echo "Not Inserted";
?>