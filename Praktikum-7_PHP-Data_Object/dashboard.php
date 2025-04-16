<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PHP Data Object</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
    <?php include("config.php"); ?>

    <main>
        <div class="table-control">
            <a href="index.php" class="page-link">Form</a>
            <h2>Tabel Data Diri</h2>
            <a href="truncate.php" class="truncater">(WARNING!) Truncate</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nrp</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>SD</th>
                    <th>SMP</th>
                    <th>SMA</th>
                    <th>Email</th>
                    <th>Homepage</th>
                    <th>Hobi</th>
                    <th>Interest</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $selectFetch = "SELECT * FROM data_diri";

                    foreach($dbh->query($selectFetch) as $row){
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['nrp'] . "</td>";
                        echo "<td>" . $row['kelas'] . "</td>";
                        echo "<td>" . $row['jenis_kelamin'] . "</td>";
                        echo "<td>" . $row['agama'] . "</td>";
                        echo "<td>" . $row['tempat_lahir'] . ", " . $row['tanggal_lahir'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['SD'] . "</td>";
                        echo "<td>" . $row['SMP'] . "</td>";
                        echo "<td>" . $row['SMA'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['homepage'] . "</td>";
                        echo "<td>" . $row['hobi'] . "</td>";
                        echo "<td>" . $row['interest'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <div><small>Code by Erik Triayuda Wijaya | Pemrograman Web | IT PENS<br>I've been inspired to create phpmyadmin's look.</small></div>

    <?php $dbh = NULL; ?>
</body>
</html>