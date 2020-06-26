<?php
require_once('../oop/animal.php'); //fungsi require untuk mengimpor data dari file yang di butuhkan...
class Ape extends Animal
{
  // Property
  public $name;

  // Method Construct = Method yg pertamakali di eksekusi
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function yell() //untuk menambahkan metode khusus yang tidak ada di parent nya (Animal)
  {
    echo 'Auooo';
  }
}
