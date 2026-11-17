<?php
echo "<h3>Latihan 1: Bilangan Genap (1 - 10)</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Tabel Perkalian Matriks</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 1px solid #888;
        }
        td {
            border: 1px solid #555;
            padding: 5px 8px;
            font-family: "Times New Roman", serif;
            font-size: 16px;
        }
        .header-hijau {
            background-color: #00ff00;
        }
        .ganjil-kuning {
            background-color: #ffff00;
        }
        .genap-cyan {
            background-color: #00ffff;
        }
    </style>
</head>
<body>

<h3>Latihan 2: Tabel Perkalian Matriks</h3>

<table>
    <!-- Baris Header Atas -->
    <tr>
        <td>bilangan</td>
        <?php
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            echo "<td class='header-hijau'>$kolom</td>";
        }
        ?>
    </tr>

    <!-- Baris Isi Matriks (1 sampai 10) -->
    <?php
    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";
        // Kolom pertama (Header samping kiri)
        echo "<td class='header-hijau'>$baris</td>";

        // Kolom hasil perkalian
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;
            
            // Cek ganjil atau genap untuk menentukan warna latar
            $kelasWarna = ($hasil % 2 == 0) ? "genap-cyan" : "ganjil-kuning";
            
            echo "<td class='$kelasWarna'>$hasil</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>