<?php
// connecting to database
$server = 'test213.mysql.database.azure.com';
$username = 'fx';
$password = 'Lanphamj21@@';
$dbname  = 'fx';


$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching user's position
$sqlRemove = "DELETE FROM MENU WHERE ITEM_NAME='" . $_REQUEST['itemName'] . "'" . " AND PRICE=" . $_REQUEST['price'] . " AND CATEGORY='" . $_REQUEST['category'] . "'";

if ($conn->query($sqlRemove)) {
    // header("Location : dashboard.php");
    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php
}
