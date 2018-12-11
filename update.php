<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];

$sql = "UPDATE mahasiswa SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
    header("location:view.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 