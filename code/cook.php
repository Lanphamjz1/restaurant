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

// Update status
    $sqlChanceStatus = "UPDATE ORDERS SET STATUS = 2 WHERE TABLE_NO =" . $_REQUEST['tableNo']. " AND ORDER_NO=" . $_REQUEST['orderNo']." AND QUANTITY='". $_REQUEST['quantity'] . "'" ." AND STATUS = 1";

if ($conn->query($sqlChanceStatus)) {
    // header("Location : dashboard.php");
    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php
}
?>
