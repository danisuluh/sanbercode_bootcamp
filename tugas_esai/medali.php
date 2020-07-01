<?php
/* PSEUDOCODE
1. buat array nama negara
2. buat array medali
3. buat logic : jika negara disebutkan dan memiliki medali, cari dan jumlahkan medali yang sama






*/
$negara = ['Indonesia', 'India', 'Korea Selatan'];
$medali = ['emas', 'perak', 'perunggu'];

/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */

function perolehan_medali($arr)
{
  // Kode kamu di sini
  echo '<pre>';
  $arr_result = [];
  foreach ($arr as $row) {
    if (array_key_exists($row['negara'], $arr_result)) {
      if ($row['emas'] > $arr_result[$row['negara']]['emas']) {
        $arr_result[$row['negara']] = $row;
      }
    } else {
      $arr_result[$row['negara']] = $row;
    }
  }

  print_r($arr_result);
  echo '<pre>';
}


// TEST CASES
print_r(perolehan_medali(
  array(
    array('Indonesia', 'emas'),
    array('India', 'perak'),
    array('Korea Selatan', 'emas'),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas')
  )
));
/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */

print_r(perolehan_medali([])); // no data
