<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db_latihan";

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    //Create connection to db
    $connection = mysqli_connect($servername, $username, $password, $db);

    //Check connection to db
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $insert = "INSERT INTO mahasiswa (nim, nama, alamat, telepon) 
                VALUES ('$nim', '$nama', '$alamat', '$telepon')";

    if (mysqli_query($connection, $insert)) {
        header("location:view.php");
    } else {
        echo "Data tidak berhasil dimasukkan : " . $insert . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
?>