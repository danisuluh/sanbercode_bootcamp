<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deret Aritmatika</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Deret Aritmatika</h1>

  <?php

  //CONTOH DARI TEMAN
  // function tentukan_deret_aritmatika($arr) {
  //   // kode di sini
  //       if(count($arr)<2){
  //           return "True<br>";
  //       }
  //       $diff = $arr[1] - $arr[0];
  //       for ($i=0; $i < count($arr)-1; $i++) { 
  //           # code...
  //           if($diff !== ($arr[$i+1] - $arr[$i])){
  //               return "False<br>";
  //           }
  //       }
  //       return "True<br>";
  //   }


  function tentukan_deret_aritmatika($arr)
  {
    // kode di sini
    // Kalau jumlah karakter hanya 2 atau 1, tentu sudah merupakan deret artimatik
    if (count($arr) < 2) { //otomatis hanya 
      return "True<br>";
    }
    $delta = $arr[1] - $arr[0]; //mencari selisih antara angka kedua dan pertama 
    for ($i = 0; $i < count($arr) - 1; $i++) { //untuk looping
      if ($delta !== ($arr[$i + 1] - $arr[$i])) { //mencari selisih angka kedua terhadap angka pertama, angka ketiga terhadap angka kedua, dst
        return "False <br>";
      }
    }
    return "True <br>";
  }

  // TEST CASES
  echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
  echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
  echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
  echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
  echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]); // false
  echo tentukan_deret_aritmatika([1, 2, 3, 4, 4, 6, 7, 8, 9]);
  ?>

</body>

</html>