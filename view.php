<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Select Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <h2>Tabel Mahasiswa</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
					<th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "db_latihan";

                    //Create connection to db
                    $connection = mysqli_connect($servername, $username, $password, $db);

                    //Check connection to db
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $select = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($connection, $select);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row["nim"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["alamat"]; ?></td>
                    <td><?php echo $row["telepon"]; ?></td>
					<td><a href="/db_latihan/form_edit.php?nim=<?php echo $row['nim']; ?>">Edit</a>
						<a href="delete.php?nim=<?php echo $row['nim']; ?>">Delete</a></td>
                </tr>
                <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($connection);
                ?>
                <p><a href="http://localhost/db_latihan/form_insert.php">Back</a></p>    
            </tbody>
        </table>
    </div>
</body>
</html>
