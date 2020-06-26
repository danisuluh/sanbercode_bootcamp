<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Huruf</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Ubah Huruf</h1>
  <?php

  //ord adalah intepretasi karakter huruf terhadap angka


  function ubah_huruf($string)
  {
    //kode di sini
    for ($i = 0; $i < strlen($string); $i++) {
      # code...
      $string[$i] = chr(ord($string[$i]) + 1);
    }
    return "$string<br>";
  }




  // TEST CASES
  echo ubah_huruf('wow'); // xpx
  echo ubah_huruf('developer'); // efwfmpqfs
  echo ubah_huruf('laravel'); // mbsbwfm
  echo ubah_huruf('keren'); // lfsfo
  echo ubah_huruf('semangat'); // tfnbohbu
  ?>

</body>

</html>