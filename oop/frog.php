<?php
require_once('../oop/animal.php'); //fungsi require untuk mengimpor data dari file yang di butuhkan...
class Frog extends Animal
{
  // Property
  public $name;
  public $legs = 4;


  // Method Construct = Method yg pertamakali di eksekusi
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function jump() //menambahkan metode baru yang tidak ada di parent
  {
    echo 'hop-hop';
  }

  // metode ini untuk menimpa, karena jumlah kaki nya tidak sama dengan parent, sementara property jumlah kaki sudah ada
  public function get_legs()
  {
    return $this->legs;
  }
}
