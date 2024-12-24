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
$sqlRemove = "DELETE FROM REGISTER WHERE FNAME='" . $_REQUEST['fname'] . "'" . " AND LNAME='" . $_REQUEST['lname'] . "'" . " AND PHONE=" . $_REQUEST['phone']. " AND EMAIL='" . $_REQUEST['email']. "'";


if ($conn->query($sqlRemove)) {
    // header("Location : dashboard.php");
    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php
}
