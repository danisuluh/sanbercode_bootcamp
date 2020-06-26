<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Mean</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Cari Mean</h1>
  <?php
  //dengan looping

  function cari_mean($arr)
  {
    $jumlah = 0;
    //kode di sini
    for ($i = 0; $i <= count($arr) - 1; $i++) {
      $arr[$i] = $arr[$i];
      $jumlah = $jumlah + $arr[$i];
    }
    echo 'Rata-Rata (Mean) dari Array adalah ' . round($jumlah / count($arr)) . '<br>';
  }




  //TEST CASE 
  echo cari_mean([1, 2, 3, 4, 5]); // 3
  echo cari_mean([3, 5, 7, 5, 3]); // 5
  echo cari_mean([6, 5, 4, 7, 3]); // 5
  echo cari_mean([1, 3, 3]); // 2
  echo cari_mean([7, 7, 7, 7, 7]); // 7

  echo '<br>';
  echo '<br>';
  echo '<br>';

  //dengan array_sum
  function cari_mean2($arr)
  {
    $jumlahArray = count($arr);
    $jumlahTotal = array_sum($arr);
    $mean = $jumlahTotal / $jumlahArray;
    $hasil = round($mean);
    echo '<br>';

    return $hasil;
  }


  //TEST CASE 
  echo cari_mean2([1, 2, 3, 4, 5]); // 3
  echo cari_mean2([3, 5, 7, 5, 3]); // 5
  echo cari_mean2([6, 5, 4, 7, 3]); // 5
  echo cari_mean2([1, 3, 3]); // 2
  echo cari_mean2([7, 7, 7, 7, 7]); // 7



  echo '<br>';
  echo '<br>';
  echo '<br>';

  //cara ketiga dengan foreach
  function cari_mean3($arr)
  {
    //kode di sini
    $sum = 0;
    foreach ($arr as $value) {
      # code...
      $sum += $value;
    }
    return round($sum / count($arr)) . '<br>';
  }

  echo cari_mean3([1, 2, 3, 4, 5]); // 3
  echo cari_mean3([3, 5, 7, 5, 3]); // 5
  echo cari_mean3([6, 5, 4, 7, 3]); // 5
  echo cari_mean3([1, 3, 3]); // 2
  echo cari_mean3([7, 7, 7, 7, 7]); // 7
  ?>

</body>

</html>