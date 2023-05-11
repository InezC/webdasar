<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link  href="./css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
    <div id= "main" class="d-grid gap-2">
        <?php 
            require_once "./conn.php"; 
            $sql = "SELECT * FORM `data_diri`";
        ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>TEMPAT LAHIR</td>
                <td>TANGGAL LAHIR</td>
                <td>ALAMAT</td>
            </tr>
            </thead>
            <tbody>
                
        <?php

            $no = 1;

            if ($result = mysqli_query($conn, $sql)) {
                // tampilkan satu per satu
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $no; $no++ ?></td>
                <td><?php echo $row['nim'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['tempat_lahir'] ?></td>
                <td><?php echo $row['tanggal_lahir'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td></td>
            </tr>

        <?php        
                }
            }
        
        ?>
                </tr>
            </tbody>
        </table>

    </div>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</body>
</html>