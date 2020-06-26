<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Konsep OOP</title>
  <link rel="stylesheet" href="../oop/style.css">
</head>

<body>
  <div class="container">
    <h1>Belajar Konsep Object Oriented Programming (OOP)</h1>
    <div class="container">
      <?php

      require_once('../oop/animal.php'); //fungsi require untuk mengimpor data dari file yang di butuhkan...
      require_once('../oop/ape.php'); //fungsi require untuk mengimpor data dari file yang di butuhkan...
      require_once('../oop/frog.php'); //fungsi require untuk mengimpor data dari file yang di butuhkan...

      //----------------------------------------------//AWAL CONTOH//----------------------------------------------//
      //---------------------------------------------------------------------------------
      // $sheep = new Animal("shaun");

      // // ------------------------------- --Ambil data property(Berfungsi)
      // // echo $sheep->name; // "shaun"
      // // echo"</br>";
      // // echo $sheep->legs; // 2
      // // echo"</br>";
      // // echo $sheep->cold_blooded; // false

      // // ---------------------------------Pengembangan

      // // Bisa juga untuk ubah data bisa menggunakan method set
      // $sheep->set_name('Kafri Bung');

      // // Untuk ambil data menggunakan method get
      // print $sheep->get_name();
      // echo "</br>";
      // print $sheep->get_legs();
      // echo "</br>";
      // print $sheep->get_cold();

      // // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~RELEASE 1

      // // Kelas Kodok yang diturunkan dari kelas animal
      // echo "<h3>Kelas Animal inheritance kelas Kodok </h3>";

      // $kodok = new Frog("buduk");
      // print $kodok->get_name();  //Get name milik dari class animal tetapi dapat digunakan di kelas frog karena sudah diwariskan
      // echo "</br>";
      // print $kodok->jump(); // "hop hop"
      // echo "</br>";
      // print $kodok->get_legs(); // "4" // get_legs tidak diwariskan dari animal (Sudah di overwriting) sehingga kaki kodok == 4


      // // Kelas Ape yang diturunkan dari kelas animal
      // echo "<h3>Kelas Animal inheritance kelas Ape </h3>";

      // $kodok = new Ape("kera-sakti");
      // print $kodok->get_name();  //Get name milik dari class animal tetapi dapat digunakan di kelas frog karena sudah diwariskan
      // echo "</br>";
      // print $kodok->yell(); // "hop hop"
      // echo "</br>";
      // print $kodok->get_legs(); // "2" // get_legs  diwariskan dari animal  sehingga kaki kera == 2 

      //----------------------------------------------//AKHIR CONTOH//----------------------------------------------//


      //Tugas Release 1
      $sheep = new Animal("shaun", 4, 'False');

      echo $sheep->name; // "shaun"
      echo '<br>';
      echo $sheep->legs; // 2
      echo '<br>';
      echo $sheep->cool_blooded; // false

      echo '<br>';
      echo '<br>';

      $horse = new Animal('Poni', 4, 'False');
      echo $horse->name; // "shaun"
      echo '<br>';
      echo $horse->legs; // 2
      echo '<br>';
      echo $horse->cool_blooded; // false
      // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

      echo '<br>';
      //Tugas Release 2

      // index.php
      echo '<br>';
      $sungokong = new Ape("kera sakti", 4, 'false');
      echo $sungokong->name; // "shaun"
      echo '<br>';
      echo $sungokong->legs; // 2
      echo '<br>';
      echo $sungokong->cool_blooded; // false
      $sungokong->yell(); // "Auooo"
      echo '<br>';
      echo '<br>';
      $kodok = new Frog("buduk");
      echo $kodok->name; // "shaun"
      echo '<br>';
      echo $kodok->legs; // 2
      echo '<br>';
      echo $kodok->cool_blooded; // false
      $kodok->jump(); // "hop hop"

      ?>
    </div>
  </div>
</body>

</html>