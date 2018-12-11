<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Nilai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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

        $select = "SELECT * FROM mahasiswa WHERE nim=('$_GET[nim]')";
        $result = mysqli_query($connection, $select);
        $row = mysqli_fetch_assoc($result);

    ?>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form class="form-horizontal" action="/db_latihan/db/update.php" method="post">
            <div class="form-group">
            <label class="control-label col-sm-2" for="nim">NIM : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" placeholder="Masukan NIM"  value="<?php echo $row['nim'];?>" name="nim">
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama Lengkap :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $row['nama'];?>" name="nama">
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="alamat">Alamat :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" value="<?php echo $row['alamat'];?>" name="alamat">
                </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="telepon">No. Telepon :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" placeholder="Masukan No. Telepon" value="<?php echo $row['telepon'];?>" name="telepon">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
