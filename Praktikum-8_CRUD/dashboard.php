<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku | Perpustakaan</title>

    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
    <?php include("config.php"); ?>

    <?php
        $fetch = $dbh->query("SELECT * FROM buku");

        foreach($fetch as $row){
            echo $row['id'] . " " . $row['judul'] . " " . $row['penulis'] . " " . $row['tahun'];
        }
    ?>
</body>
</html>