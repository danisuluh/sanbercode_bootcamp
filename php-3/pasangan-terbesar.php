<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasangan Terbesar</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Pasangan Terbesar</h1>

  <?php


  function pasangan_terbesar($angka)
  {
    // kode di sini

    //convert to string
    $angka = "$angka";
    $len = strlen($angka);
    $maxTenth = 0;
    $maxOneth = 0;
    for ($i = 0; $i < $len; $i++) {
      # code...
      if ($angka[$i] > $maxTenth) {
        $maxTenth = $angka[$i];
        $maxOneth = $angka[$i + 1];
      } else if ($angka[$i] > $maxTenth) {
        if ($angka[$i + 1] > $maxOneth) {
          $maxOneth = $angka[$i + 1];
        }
      }
    }

    return "Pasangan terbesar $angka => " . (10 * $maxTenth + $maxOneth) . "<br>";
  }



  // TEST CASES
  echo pasangan_terbesar(641573); // 73
  echo pasangan_terbesar(12783456); // 83
  echo pasangan_terbesar(910233); // 91
  echo pasangan_terbesar(71856421); // 85
  echo pasangan_terbesar(79918293); // 99







  ?>
</body>

</html>