<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<center>
 <!-- BIODATA  -->
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

  <h1>function</h1>
      <pre> <!--untuk mengatur jarak-->
      <?php
  function myMessage() {
    echo"Hello world!!!";
}
myMessage();
?> 
      </pre> 

<h1>Function Argument</h1>
      <pre> <!--untuk mengatur jarak-->
      <?php
function familyName($fname) {
  echo "$fname <br>";   // funsi br untuk mengatur posisi//
}
  familyName("jisoo");
  familyName("jeahyun");
  familyName("Kim jisoo");
  familyName("hansoe");
?>
</pre>

</body>
</html>
