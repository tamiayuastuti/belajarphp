<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<center>      
<div class="biodata">
        <table>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <th>Tami Ayu Astuti</th>
            </tr>
            <tr>
                <th>kelas</th>
                <th>:</th>
                <th>XI RPL</th>
            </tr>
            <tr>
                <th>Tanggal praktikum</th>
                <th>:</th>
                <th>29 Januari 2024</th>
            </tr>
        </table>
  </div>
  <div class="foto">
        <img src="timii.jpg" alt="timii.jpg" height="300" width="300">
  </div>
      </center>

<?php
// perulangan for
echo "<h2>perulangan For!!</h2>";  // bisa menentukan jumlah perulangan //
for($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}

// perulangan while 
echo "<h2>perulangan while!!</h2>"; // untuk mengulang sesuatu yang belum jelas jumlah pengulangannya // 
$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

// perulangan Do/while
echo "<h2>perulangan Do/while!!</h2>";  // perbedaan Do/while dengan while terletal pada cara ia memulai perulangan,perulangan Do/while akan selalu malakukan pengulangan sebanyak 1 kali,kemudian melakukan pengecekan kondisi sedangkan perulangan while akan mengecek kondisi terlebih dahulu,baru melakukan pengulangan//
$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

// Peulangan Foreach
echo "<h2>perulangan Foreach!!</h2>"; // perulangan foreach sma seperti perulangan untuk mengecek array//
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";


?>
</body>
</html>
