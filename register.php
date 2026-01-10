<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error){
    die( "Connection Failed" . $conn->connect_error);
}

$id = $_POST ["id"];
$name = $_POST ["name"];
$address = $_POST ["address"];
$phone = $_POST ["phone"];
$bday = $_POST ["bday"];
$user= $_POST ["username"];
$email = $_POST ["email"];
$pass = $_POST ["password"];

$sql = "INSERT INTO register (id, name, address, phone, bday, username, email, password)
VALUES ('$id', '$name','$address', '$phone', '$bday','$user','$email','$pass') ";

if ($conn->query($sql)===TRUE){
    echo "Account Have Been Registered";
    header("location:index.html");
}
else{
    echo "Please Try Again!";
}
$conn->close();
?>