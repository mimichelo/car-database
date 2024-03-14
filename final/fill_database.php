<?php
$servername = 'localhost';
$DBusername = 'root';
$DBpassword = '';
$dbname = "cars";

// Create connection
$conn = new mysqli($servername, $DBusername, $DBpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$populate = 0;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $populate = 1;
}

if ($populate == 1) {
    $sql = "INSERT INTO `brands` (`make`, `model`, `price`, `category`, `image`) VALUES
        ('Toyota', 'Tacoma', '33400', '1', 'images/Toyota Tacoma.jpg'),
        ('Toyota', 'Tundra', '33500', '1', 'images/Toyota Tundra.jpg'),
        ('Ford', 'F150', '33400', '1', 'images/ford f-150.jpg'),
        ('Ford', 'Everest', '32000', '2', 'images/Ford Everest SUV.jpeg'),
        ('Toyota', 'BZ4X', '32000', '2', 'images/Toyota BZ4X SUV.jpeg'),
        ('Ford', 'Explorer', '55000', '2', 'images/Ford Explorer Timberline SUV.jpg'),
        ('Toyota', 'Camry', '27515', '3', 'images/Toyota Camry XSE.jpg'),
        ('Ford', 'Mustang', '34500', '6', 'images/Ford-Mustang.jpg'),
        ('Ford', 'Focus', '17000', '4', 'images/Ford focus.jpeg'),
        ('Toyota', 'Prius', '25500', '3', 'images/Toyota Prius.jpg'),
        ('Toyota', 'Corolla', '18000', '3', 'images/Toyota Corolla.jpg'),
        ('Toyota', 'Yaris', '18000', '4', 'images/Toyota Yaris.jpg'),
        ('Toyota', 'Sienna', '29000', '5', 'images/Toyota Sienna.jpg'),
        ('Ford', 'Transit', '25500', '3', 'images/Ford-Transit.jpg'),
        ('Chrysler', 'Pacifica', '29000', '1', 'images/Chrysler Pacifica.jpeg'),
        ('Ford', 'Mustang convertible', '29000', '5', 'images/ford mustang convertible.jpeg'),
        ('Ford', 'Bronco convertible', '30000', '5', 'images/Ford-Bronco convertible.jpg'),
        ('Toyota', 'Prius convertible', '29000', '6', 'images/Toyota Prius convertible.jpeg')";

    if ($conn->multi_query($sql) === TRUE) {
        echo "Database populated successfully.";
    } else {
        echo "Error populating the database: " . $conn->error;
    }
}

$conn->close();
?>

<form action="" method="post">
    <input type="submit" name="submit" value="Click the button to populate your database">
    <br>
</form>
