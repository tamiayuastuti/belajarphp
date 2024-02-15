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
        <img src="timii.jpg" alt="timii.jpg" height="200" width="200">
  </div>
      </center>
      <!-- 1. Memeriksa apakah file telah terunggah dengan benar menggunakan fungsi $_FILES["fileToUpload"]["error"].
           2. Memeriksa dan membatasi tipe file yang diperbolehkan dengan memeriksa ekstensi file menggunakan fungsi pathinfo() atau mime_content_type().
           3. Menyimpan file yang diunggah ke lokasi yang diinginkan menggunakan fungsi move_uploaded_file(). -->

      <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>      