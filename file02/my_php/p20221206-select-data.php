<?php
$servername = "localhost";
$username = "owner";
$password = "123456";
$db = "testdb";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    echo("Could not connect to" . mysqli_connect_error());
}
// echo("連線成功\n");
$sql = "SELECT * FROM user_info ORDER BY Created_at DESC";
mysqli_query($conn, 'SET NAMES utf8;');
$result = mysqli_query($conn, $sql);
$thisdata = array();
while( $row = mysqli_fetch_array($result) ){
    $thisdata[] = $row;
}
echo (json_encode($thisdata));
mysqli_close($conn);
?>