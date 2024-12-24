<?php
// connecting to database
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "test213.mysql.database.azure.com", "fx", "{Lanphamj21@@}", "{fx}", 3306, MYSQLI_CLIENT_SSL);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update status
    $sqlChanceStatus = "UPDATE ORDERS SET STATUS = 4 WHERE TABLE_NO =" . $_REQUEST['tableNo']. " AND ORDER_NO=" . $_REQUEST['orderNo']." AND QUANTITY='". $_REQUEST['quantity'] . "'" ." AND STATUS = 3";

if ($conn->query($sqlChanceStatus)) {
       // header("Location : dashboard.php");
       ?>
       <script>
           window.location = "dashboard.php";
       </script>
       <?php
}
