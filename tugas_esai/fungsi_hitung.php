<?php
//PSEUDOCODE
//1. buat fungsi untuk memecah $string_data menjadi angka dan operator
//2. tentukan besaran angka pertama dan kedua
//3. tentukan operator yang sesuai
//4. operasi matematika

//1. buat fungsi untuk memecah $string_data menjadi angka dan operator
function multiexplode($delimiters, $string)
{
  $ary = explode($delimiters[0], $string);
  array_shift($delimiters);
  if ($delimiters != NULL) {
    foreach ($ary as $key => $val) {
      $ary[$key] = multiexplode($delimiters, $val);
    }
  }
  return  $ary;
}
function hitung($string_data)
{
  // Kode kalian di sini

  //ALGORITMA:
  //menentukan $delimiter = karakter operator matematika
  //$string_data dipecah dengan explode  
  //membuat rumusan untuk perhitungan matematika


  $delimiters = array("*", "+", ":", "%", "-");
  $hasilPecah = multiexplode($delimiters, $string_data);
  echo '<pre>';
  print_r($hasilPecah);
  echo '</pre>';


  if ($hasilPecah[0][0][0][0][0] != 0 && $hasilPecah[1][0][0][0][0] != 0) {
    $hasilPecah[0][0][0][0][0] * $hasilPecah[1][0][0][0][0];
  } else if ($hasilPecah[0][0][0][0][0] != 0 && $hasilPecah[0][1][0][0][0] != 0) {
    $hasilPecah[0][0][0][0][0] + $hasilPecah[0][1][0][0][0];
  }
}


// TEST CASES
echo hitung("102*2"); //204
echo hitung("2+3"); //5
echo hitung("100:25"); //4
echo hitung("10%2"); //0
echo hitung("99-2"); //97
