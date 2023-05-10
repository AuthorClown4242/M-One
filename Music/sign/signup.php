<?php
include('connection.php');

$user = $_POST['username'];
$mail = $_POST['email'];
$password = $_POST['password'];

if ($user == null || $mail == null || $password == null) {
    echo "<div>required credentials are empty</div>";
} else {
    $sql = mysqli_query($connection, "insert into signup(username,email,password) values('$user','$mail','$password')");
    echo "<div>data is inserted successfully</div>";
}


?>