<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Toko | PHP OOP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once 'Toko.php';

    $item1 = new Produk("Shampoo Pantene", "5.000,-", "Alat Mandi");
    $item2 = new Produk("Indofood Egg Roll", "2.000,-", "Makanan");
    $item3 = new Produk("Laptop MSI", "20.000.000,-", "Elektronik");
    $item4 = new Produk("Mouse Wireless Logitech M22", "400.000,-", "Elektronik");
    $item5 = new Produk("Intel Core i3-4030u CPU @1.9Ghz", "350.400,-", "Elektronik");
    $item6 = new Produk("Beras 2kg", "21.000,-", "Sembako");
    $item6 = new Produk("Cabai 2 ton", "3.042.000,-", "Sembako");
    
    $toko = new Toko("Toko Sang Pemandu Angin");

    $toko->tambahProduk($item1);
    $toko->tambahProduk($item2);
    $toko->tambahProduk($item3);
    $toko->tambahProduk($item4);
    $toko->tambahProduk($item5);
    $toko->tambahProduk($item6);

    // Display starts here
    $toko->getNamaToko();

    echo "<main>";
    $toko->tampilkanProduk();
    echo "</main>";
?>
</body>
</html>