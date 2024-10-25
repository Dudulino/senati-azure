<?php
// PHP Data Objects(PDO) Sample Code:
$password = "Josue_2006";
try{
    $conn = new PDO("sqlsrv:server = tcp:pilcodb.database.windows.net,1433; Database = senati-db", "pilco", "Josue_2006");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "pilco", "pwd" => "Josue_2006", "Database" => "senati-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:pilcodb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>