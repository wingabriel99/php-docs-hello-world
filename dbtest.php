<?php

$servername = "ldduat-server.mysql.database.azure.com";
$username = "llwfxkmesm";
$password = 'tVBbWimSF9RKwF$t';
$dbname = "";

// Specify the path to your SSL CA certificate file
$cafile = "DigiCertGlobalRootCA.crt.pem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Set SSL CA certificate
if (!mysqli_ssl_set($conn, NULL, NULL, $cafile, NULL)) {
    die("Failed to set SSL CA certificate: " . mysqli_error($conn));
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();
?>