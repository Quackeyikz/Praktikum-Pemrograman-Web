<?php
    session_start();

    if(isset($_SESSION["toggle_admin"])){
        $admin = TRUE;
    } else {
        $admin = FALSE;
    }

    include("config.php");
?>

<?php
    // Handle input dan edit
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["edit-submit"])){
            $existing_id = "";
            $new_judul = "";
            $new_penulis = "";
            $new_tanggal = "";
            $new_deskripsi = "";

            if(isset($_POST["edit-id"]))
                $existing_id = $_POST['edit-id'];

            if(isset($_POST['edit-judul']))
                $new_judul = $_POST['edit-judul'];
            
            if(isset($_POST['edit-penulis']))
                $new_penulis = $_POST['edit-penulis'];

            if(isset($_POST['edit-tanggal']))
                $new_tanggal = $_POST['edit-tanggal'];

            if(isset($_POST['edit-desc']))
                $new_deskripsi = $_POST['edit-desc'];

            // Edit atau tambah
            if(!empty($existing_id)){
                $stmt = $dbh->prepare("UPDATE buku SET judul=:judul, penulis=:penulis, tahun=:tahun, deskripsi=:deskripsi WHERE id=:id");
                $stmt->bindParam(':id', $existing_id);
            } else {
                $stmt = $dbh->prepare("INSERT INTO buku (judul, penulis, tahun, deskripsi) VALUES (:judul, :penulis, :tahun, :deskripsi)");
            }

            $stmt->bindParam(':judul', $new_judul);
            $stmt->bindParam(':penulis', $new_penulis);
            $stmt->bindParam(':tahun', $new_tanggal);
            $stmt->bindParam(':deskripsi', $new_deskripsi);

            $stmt->execute();

            // Program punya refresh issue jadi lebih baik direfresh setelah input
            header("Location: index.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku | Perpustakaan CRUD</title>

    <link rel="stylesheet" href="style/index.css">
    <link rel="icon" href="img/bookCovers/Shogun_Almighty_Reborn_as_Raiden_With_Unlimited_Power.webp">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <a href="index.php">
                <img src="img/Icon_Adventurer_Handbook.webp" width="40px" alt="Icon_Adventurer_Handbook">
                <span>Perpustakaan</span>
            </a>
            <h1>Daftar Buku</h1>
            <a href="session_manage.php" <?php if($admin) echo "class='admin-active'" ?>>
                <span>Kelola</span>
                <img src="img/Icon_Character_Card.webp" width="40px" alt="Icon_Adventurer_Handbook">
            </a>
        </div>
    </nav>

    <main>
        <div class="daftar-buku">
            <form action="" method="POST" name="cariBuku" class="form-buku">
                <input type="text" name="cariNama" placeholder="Cari buku di perpustakaan...">
                <input type="submit" value="Cari">
            </form>

            <div class="grid-buku">
                <?php 
                $fetchSql = "SELECT * FROM buku";

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(isset($_POST['cariNama'])){
                        $tempSql = $_POST['cariNama'];
                        $fetchSql = "SELECT * FROM buku WHERE judul LIKE '%$tempSql%'";
                    }
                }

                $result = $dbh->query($fetchSql);

                if ($result->rowCount() == 0) {
                    echo "<p class='fetch-empty'><img src='img/Icon_Book_Search.webp' width='40px'><span>Buku tidak ditemukan.</span></p>";
                } else {
                    $rowCount = 1;

                    foreach ($result as $row) {
                        // Judul
                        if(strlen($row['judul']) > 10)
                            $judul_trimmed = substr($row['judul'], 0, 10) . "...";
                        else
                            $judul_trimmed = $row['judul'];

                        $judul_gambar = str_replace(' ', '_', $row['judul']);
                        $gambar_link = "img/bookCovers/" . $judul_gambar . ".webp";

                        if (!file_exists($gambar_link)) {
                            $gambar_link = "img/bookCovers/Default_Cover.webp";
                        }

                        // Rarity
                        $rarity_icon = "Icon_5_Stars.webp";
                        $rarity = 5;

                        if($rowCount > 8){
                            $rarity_icon = "Icon_4_Stars.webp";
                            $rarity = 4;
                        }

                        echo "<div class='box-buku' onclick=\"showBookDetail('{$row['id']}','{$row['judul']}', '{$row['penulis']}', '{$row['tahun']}', '{$row['deskripsi']}', '{$rarity}', '{$gambar_link}')\">";
                            echo "<div><img src='" . $gambar_link . "'></div>";
                            echo "<div><img src='img/$rarity_icon'></div>";
                            echo "<div>$judul_trimmed</div>";
                        echo "</div>";

                        $rowCount++;
                    }
                }
                ?>
            </div>
        </div>

        <div class="detail-buku">
            <div id="detail-judul">Pilih Buku</div>
            <div id="detail-rilis">
                <div>
                    <div class="detail-tanggal">
                        <small>Dirilis pada</small><br>
                        <span id="detail-tanggal-terbit">-</span>
                    </div>
                    <div class="detail-penulis">
                        <span id="detail-penulis-buku">-</span><br>
                        <img src="img/Icon_5_Stars.webp" alt="Rarity">
                    </div>
                </div>
                <img id="detail-cover" src="img/bookCovers/Default_Cover.webp" alt="Cover Buku">
            </div>
            <div id="detail-update" <?php if($admin) echo "style='display: block;'" ?>>
                <a id="detail-edit" href="#" onclick="showForm(2)">
                    <span>Edit</span>
                    <i class="bi bi-pencil-square"></i>
                </a>
                <a id="detail-hapus" href="#">
                    <span>Hapus</span>
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </div>
            <div id="detail-deskripsi">
                <span><i>(Deskripsi tidak tersedia)</i></span>
            </div>
            <!-- Sneaky data hehe (dont tell anyone) -->
            <div id="detail-hidden">
                <input type="hidden" id="id_buku">
                <input type="hidden" id="judul_buku">
                <input type="hidden" id="penulis_buku">
                <input type="hidden" id="tahun_buku">
                <input type="hidden" id="deskripsi_buku">
                <input type="hidden" id="cover_buku">
            </div>
        </div>
    </main>

    <div id="inputForm-activator" onclick="showForm(1)" <?php if($admin) echo "style='display: block;'" ?>><i class="bi bi-bookmark-plus-fill"></i></div>
    <div id="inputForm-overlay" onclick="hideForm()"></div>

    <form action="" method="POST" id="inputForm">
        <span onclick="hideForm()"><i class="bi bi-x-square-fill"></i></span>

        <div class="edit-form-container">
            <div>
                <div class="edit-gambar">
                    <img id="edit-cover" src="img/bookCovers/Default_Cover.webp" alt="200px">
                </div>
                <input type="hidden" name="edit-id" id="edit-id">

                <!-- <label for="edit-judul">Judul Buku</label> -->
                <input type="text" name="edit-judul" id="edit-judul" placeholder="Masukkan judul buku...">

                <!-- <label for="edit-penulis">Penulis</label> -->
                <input type="text" name="edit-penulis" id="edit-penulis" placeholder="Masukkan penulis...">

                <!-- <label for="edit-tanggal">Tanggal Terbit</label> -->
                <input type="date" name="edit-tanggal" id="edit-tanggal">
            </div>
            <div>
                <textarea name="edit-desc" id="edit-desc" placeholder="Masukkan deskripsi buku... (opsional)"></textarea>
                <div class="edit-confirm">
                    <input type="reset" value="Reset" name="edit-reset">
                    <input type="submit" value="Submit" name="edit-submit">
                </div>
            </div>
        </div>
    </form>

    <script>
        let stored_id_buku, stored_judul_buku, stored_penulis_buku, stored_tahun_buku, stored_deskripsi_buku, stored_gambar_link;

        document.addEventListener("DOMContentLoaded", function() {
            stored_id_buku = document.getElementById("id_buku");
            stored_judul_buku = document.getElementById("judul_buku");
            stored_penulis_buku = document.getElementById("penulis_buku");
            stored_tahun_buku = document.getElementById("tahun_buku");
            stored_deskripsi_buku = document.getElementById("deskripsi_buku");
            stored_gambar_link = document.getElementById("cover_buku");
        });

        function showBookDetail(id, judul, penulis, tahun, deskripsi, rarity, gambar_link){
            let tagJudul = document.getElementById("detail-judul");

            if (rarity == 4){
                document.getElementById("detail-rilis").style.backgroundImage = "url('img/Background_Item_4_Star.webp')";
                tagJudul.style.backgroundColor = "blueviolet";
            } else if (rarity == 5) {
                document.getElementById("detail-rilis").style.backgroundImage = "url('img/Background_Item_5_Star.webp')";
                tagJudul.style.backgroundColor = "goldenrod";
            }

            tagJudul.innerHTML = judul;

            // Sneaky value method
            // tagJudul.value = id;

            document.getElementById("detail-tanggal-terbit").innerHTML = tahun;
            document.getElementById("detail-penulis-buku").innerHTML = penulis;
            document.getElementById("detail-cover").src = gambar_link;

            if(deskripsi != "")
                document.getElementById("detail-deskripsi").innerHTML = deskripsi;
            else
                document.getElementById("detail-deskripsi").innerHTML = "<span><i>(Deskripsi tidak tersedia)</i></span>";

            // Tombol hapus
            document.getElementById("detail-hapus").href = "hapus.php?id=" + id;

            // Storing hidden data (hehe im so sneaky)
            stored_id_buku.value = id;
            stored_judul_buku.value = judul;
            stored_penulis_buku.value = penulis;
            stored_tahun_buku.value = tahun;
            stored_deskripsi_buku.value = deskripsi;
            stored_gambar_link.value = gambar_link;
        }
        
        function showForm(pilihan){
            document.getElementById("inputForm-overlay").style.display = "block";
            document.getElementById("inputForm").style.display = "flex";

            // 1 untuk menambah, 2 untuk edit
            switch(pilihan)
            {
                case 1:
                    // Yowes sih, gak diapapain :U
                    break;

                case 2:
                    document.getElementById("edit-id").value = stored_id_buku.value;
                    document.getElementById("edit-judul").value = stored_judul_buku.value;
                    document.getElementById("edit-penulis").value = stored_penulis_buku.value;
                    document.getElementById("edit-tanggal").value = stored_tahun_buku.value;
                    document.getElementById("edit-desc").value = stored_deskripsi_buku.value;
                    document.getElementById("edit-cover").src = stored_gambar_link.value;
                    break;
            }
        
            // Sneaky value method
            // let judulValue = document.getElementById("detail-judul").value;
            // document.getElementById("testtest").innerHTML = judulValue;
        }

        function hideForm(){
            document.getElementById("inputForm-overlay").style.display = "none";
            document.getElementById("inputForm").style.display = "none";
        }
    </script>
</body>
</html>