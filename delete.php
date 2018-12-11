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

// sql to delete a record
$sql = "DELETE FROM mahasiswa WHERE nim=('$_GET[nim]')";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header("location:view.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 