
<?php
session_start();
if(!isset($_POST['submit'])){
	header('Location: index.php');
	exit();
}
$conn = mysqli_connect("localhost","root","","Garments_V2");
if($conn->connect_error){
	die("Connection Failed " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$error = "Incorrect username or password!!";

$sql = "SELECT * from users where user_id = ? and password = ?" ;
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
	header("Location: index.php?error=sqlerror");
	exit();
}
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


if ($row = mysqli_fetch_assoc($result)){
	$_SESSION['username'] = $username;
	$_SESSION['dept'] = $row['dept'];
	header('Location: ../controller/index.php');
	exit();
} else {
	header('Location: index.php?error=wrongID');
	exit();
}

