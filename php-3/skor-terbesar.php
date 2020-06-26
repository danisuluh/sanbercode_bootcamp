<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skor Terbesar</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Skor Terbesar</h1>

  <?php


  //Dummy data
  $skor = [
    ['nama' => 'Andi', 'kelas' => 'Laravel', 'nilai' => 90],
    ['nama' => 'Budi', 'kelas' => 'React Native', 'nilai' => 80],
    ['nama' => 'Cantika', 'kelas' => 'React JS', 'nilai' => 70],
    ['nama' => 'Dani', 'kelas' => 'React Native', 'nilai' => 100],
    ['nama' => 'Enel', 'kelas' => 'Laravel', 'nilai' => 50],
    ['nama' => 'Fiko', 'kelas' => 'React Native', 'nilai' => 90],
    ['nama' => 'Galuh', 'kelas' => 'Laravel', 'nilai' => 60],
    ['nama' => 'Harma', 'kelas' => 'React JS', 'nilai' => 80],
    ['nama' => 'Ijuk', 'kelas' => 'React Native', 'nilai' => 100],
    ['nama' => 'Joni', 'kelas' => 'Laravel', 'nilai' => 70],
    ['nama' => 'Kiko', 'kelas' => 'React JS', 'nilai' => 60],
  ];

  function skor_terbesar($arr)
  {
    //kode di sini
    echo '<pre>';
    $arr_result = [];
    foreach ($arr as $row) {
      # code...
      if (array_key_exists($row['kelas'], $arr_result)) {
        if ($row['nilai'] > $arr_result[$row['kelas']]['nilai']) {
          $arr_result[$row['kelas']] = $row;
        }
      } else {
        $arr_result[$row['kelas']] = $row;
      }
    }

    print_r($arr_result);
    echo '<pre>';
  }




  // TEST CASES
  print_r(skor_terbesar($skor));
  /* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/





  ?>
</body>

</html>