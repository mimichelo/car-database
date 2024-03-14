<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaying cars</title>
    <style type="text/css">
        .auto-style1 {
            border-style: none;
            border-color: inherit;
            border-width: 0px;
        }
        .auto-style2 {
            border-style: solid;
            border-width: 1px;
        }
    </style>
</head>
<body>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    //echo "Connected";
}
else
{
    echo "Not Connected" . mysqli_connect_error();
}

$query = "SELECT * FROM brands";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    $count = 0;
    $header = array("Trucks", "SUVs", "Sedans", "Hatchbacks", "Minivans", "Convertibles");
    $headerIndex = 0;
    
    while ($result = mysqli_fetch_assoc($data)) {
        if ($count % 3 == 0) {
            echo "<h3>" . $header[$headerIndex] . "</h3>";
            echo "<table class='auto-style1' style='width: 99%; height: 357px; border-collapse: collapse;'>";
            echo "<tr>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Image</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Make</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Model</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Price</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Contact</th>";
            echo "</tr>";
            $headerIndex++;
        }
        echo "<tr>";
        echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
        echo "<img alt='' height='148' src='" . $result['image'] . "' width='394'>";
        echo "</td>";
        echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
        echo "<strong>" . $result['make'] . "</strong><br>";
        echo "</td>";
        echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
        echo $result['model'] . "<br>";
        echo "</td>";
        echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
        echo "Starting at " . $result['price'] . "<br>";
        echo "</td>";
        echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
        echo "<form action='contact.php'>";
        echo "<button type='submit'>Contact for internet price</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
        $count++;
        if ($count % 3 == 0 || $count == $total) {
            echo "</table>";
        }
    }
} else {
    echo "Table has no data";
}

mysqli_close($conn);

?>

</body><?php
// Existing code...

$header = array("Trucks", "SUVs", "Sedans", "Hatchbacks", "Minivans", "Convertibles");
$headerIndex = 0;

while ($result = mysqli_fetch_assoc($data)) {
    if ($count % 3 == 0) {
        echo "<h3>" . $header[$headerIndex] . "</h3>";
        echo "<table class='auto-style1' style='width: 99%; height: 357px; border-collapse: collapse;'>";
        echo "<tr>";
        echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Image</th>";
        echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Make</th>";
        echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Model</th>";
        echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Price</th>";
        echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Contact</th>";
        echo "</tr>";
        $headerIndex++;
    }
    echo "<tr>";
    echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
    echo "<img alt='' height='148' src='" . $result['image'] . "' width='394'>";
    echo "</td>";
    echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
    echo "<strong>" . $result['make'] . "</strong><br>";
    echo "</td>";
    echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
    echo $result['model'] . "<br>";
    echo "</td>";
    echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
    echo "Starting at " . $result['price'] . "<br>";
    echo "</td>";
    echo "<td class='auto-style2' style='border: 1px solid black; padding: 5px;'>";
    echo "<form action='contact.php'>";
    echo "<button type='submit'>Contact for internet price</button>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    $count++;

    if ($count % 3 == 0 || $count == $total) {
        echo "</table>";
    }
}



?>

</html>
