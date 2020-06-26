<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papan Catur</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Papan Catur</h1>
  <?php


  function papan_catur($angka)
  {
    // tulis kode di sini
    echo "<pre>Papan catur $angka x $angka <br>";
    for ($i = 0; $i < $angka; $i++) {
      # code...
      $row = '';
      if ($i % 2 == 0) {
        # code...
        for ($j = 0; $j < $angka; $j++) {
          # code...
          $row .= '# ';
        }
      } else {
        # code...
        for ($j = 0; $j < $angka - 1; $j++) {
          # code...
          $row .= " #";
        }
      }
      echo "$row <br>";
    }
    echo '<br><pre>';
  }


  // function papan_catur($angka)
  // {
  //   // tulis kode di sini
  //   $pola = '';
  //   for ($i = 0; $i <= $angka; $i++) {
  //   }
  // }

  // TEST CASES
  echo papan_catur(4);
  /*
# # # #
 # # #
# # # #
 # # #
 */

  echo papan_catur(8);
  /* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

  echo papan_catur(5);
  /*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/






  ?>
</body>

</html>