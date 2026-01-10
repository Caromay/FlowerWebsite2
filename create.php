<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Logic to Insert Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $bday = $_POST['bday'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO register (name, address, phone, bday, username, email, password) 
            VALUES ('$name', '$address', '$phone', '$bday', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: read.php"); // Redirects back to your list
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

    <div class="form-container">
        
        <form action="create.php" method="POST">
           <div class="register-container">
      
        <h2>Add Customer</h2>
        
            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="text" id="address" name="address" placeholder="Address" required>
            <input type="tel" id="phone" name="phone" placeholder="Phone" required>
            <input type="date" id="bday" name="bday" placeholder="Birth-date" required>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            
            <button type="submit">Save Customer</button>
						<a href="read.php" class="login-link"> Cancel</a>
        
    	</div>
        </form>
    </div>

</body>
</html>