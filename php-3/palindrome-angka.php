<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrome Angka</title>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
  <h1>Palindrome Angka</h1>
  <?php


  function palindrome_angka($angka)
  {
    echo "$angka =>";
    // tulis kode di sini
    while (!is_palindrome($angka)) {
      $angka++;
    }
    echo "$angka<br>";
  }

  function is_palindrome($num)
  {
    $numString = "$num";
    $len = strlen($numString);
    for ($i = 0; $i < $len / 2; $i++) {
      # code...
      if ($numString[$i] !== $numString[$len - $i - 1]) {
        return false;
      }
    }
    return true;
  }


  // function palindrome_angka($angka)
  // {
  //   // tulis kode di sini


  // }

  // TEST CASES
  echo palindrome_angka(8); // 9
  echo palindrome_angka(10); // 11
  echo palindrome_angka(117); // 121
  echo palindrome_angka(175); // 181
  echo palindrome_angka(1000); // 1001
  ?>

</body>

</html>