<?php
require_once 'Kucing.php';
require_once 'Anjing.php';

// Membuat objek Kucing
$kucing = new Kucing();
$kucing->setNama("Ichika");
$kucing->setUmur(2);

// Membuat objek Anjing
$anjing = new Anjing();
$anjing->setNama("Biggu");
$anjing->setUmur(3);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
</head>
<body>
    <h2>Data Hewan</h2>

    <h3>1. Data Kucing </h3>
    <ul>
        <li>Nama: <?= $kucing->getNama(); ?></li>
        <li>Umur: <?= $kucing->getUmur(); ?> tahun</li>
        <li>Jenis: <?= $kucing->getJenis(); ?></li>
        <li>Suara: <?= $kucing->getSuara(); ?></li>
    </ul>

    <h3>2. Data Anjing </h3>
    <ul>
        <li>Nama: <?= $anjing->getNama(); ?></li>
        <li>Umur: <?= $anjing->getUmur(); ?> tahun</li>
        <li>Jenis: <?= $anjing->getJenis(); ?></li>
        <li>Suara: <?= $anjing->getSuara(); ?></li>
    </ul>
</body>
</html>