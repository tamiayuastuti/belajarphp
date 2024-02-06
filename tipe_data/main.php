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
 <!-- getting the data type -->
    <h1>getting the data type</h1>
      <?php
$x = 5;
var_dump($x);
?>
<!-- string php -->
    <h1>string php</h1>
    <?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>
<!-- integer php -->
     <h1>integer php</h1>
     <?php  
$x = 5985;
var_dump($x);
?>  
<!-- float php -->
     <h1>float php</h1>
     <?php  
$x = 10.365;
var_dump($x);
?>  
<!-- boolean php -->
     <h1>Boolean php</h1>
     <?php 
$x = true;
var_dump($x);
?>
<!-- array php -->
    <h1>array</h1>
    <?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
<!-- object php -->
     <h1>Object php</h1>
     <?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>
<!-- null value -->
     <h1>Null Value</h1>
     <?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<!-- change data type -->
     <h1>Change Data Type</h1>
     <?php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);
?>
 
</body>
</html>
    



      