<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
        <div class="foto">
          <img src="timii.jpg" class="img-thumbnail" alt="" width="150" height="auto">
        </div>
        </div>
        <div class="col-md-8 kertas-identitas">
          <div class="biodata">
          <table width="100%" border="0">
      <tbody><tr>
          <td valign="top">
          <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
            <tbody>
              <tr>
                <td width="25%" valign="top" class="textt">Nama</td>
                  <td width="2%">:</td>
                  <td style="color: #e9a7f9; font-weight:bold">Tami ayu astuti</td>
              </tr>
            <tr>
                <td class="textt">Tanggal pratikum</td>
                  <td>:</td>
                  <td>29/05/2024</td>
              </tr>
              <tr>
                  <td class="textt">kelas</td>
                    <td>:</td>
                    <td>XI-RPL</td>
                </tr>
          </tbody></table>
          </td>
      </tr>
      </tbody></table>
    </div>
        </div>
      </div>
    </div>
  </div>
      <script src="style.css"></script>
    </body>
  </html>
 <!-- Session biasanya dimulai dengan sebuah fungsi session_start(). Variabel session diset dengan variabel global PHP yaitu $_SESSION. -->
  <?php
// Start the session
session_start();
?>
 <?php
// Set session variables
   $_SESSION["favcolor"] = "green";
   $_SESSION["favanimal"] = "cat";
   echo "Session variables are set.";
?>

</body>
</html>