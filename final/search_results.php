<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    //echo "Connected";
} else {
    echo "Not Connected" . mysqli_connect_error();
}

$searchQuery = $_GET['search'];
$query = "SELECT * FROM brands WHERE make LIKE '%$searchQuery%' OR model LIKE '%$searchQuery%'";
$searchData = mysqli_query($conn, $query);

$total = mysqli_num_rows($searchData);

if ($total != 0) {
    $count = 0;
    echo "<h2>Search results for: $searchQuery</h2>"; // Display the search query

    while ($result = mysqli_fetch_assoc($searchData)) {
        if ($count % 3 == 0) {
            echo "<table class='auto-style1' style='width: 99%; height: 357px; border-collapse: collapse;'>";
            echo "<tr>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Image</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Make</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Model</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Price</th>";
            echo "<th class='auto-style2' style='border: 1px solid black; padding: 5px;'>Contact</th>";
            echo "</tr>";
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
    echo "<h2>No results found for: $searchQuery</h2>"; // Display no results message
}

mysqli_close($conn);
?>
