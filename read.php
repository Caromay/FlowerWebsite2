
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/read.css">
</head>
<body>
	
    <div class="container">
     <div class="header-area" style="display: flex; justify-content: space-between; align-items: center;">
        <h1>List of Customers</h1>
        <a href="create.php" style="background-color: #FF69B4; color: white; 
        text-decoration: none; padding: 10px 20px; border-radius: 6px;
         font-size: 14px; font-weight: 500; display: inline-block;">Add Customer</a>
    </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Birthdate</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                     <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM register";
            $result = $conn->query($sql);
            if (!$result) {
                die("Error Query: " . $conn->error);
            }
            
            while ($row = $result->fetch_assoc()) { 
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['bday']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    
                    <td>
                        <div class='button-group'>
                            <a class='btn btn-primary btn-sm' href='update.php?id={$row['id']}'>Edit</a><br><br>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a><br><br>

                            <form action='' method='POST' enctype='multipart/form-data' style='display:inline;'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $conn->close();
            ?>
            </tbody> 
        </table>
    </div>
</body>
</html>