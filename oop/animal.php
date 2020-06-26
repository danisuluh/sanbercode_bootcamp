<?php
class Animal
{
  public $name;  //Semua properti tidak dibuat disini, karena nanti akan di set dan di get di metode (function di bawah)
  public  $legs;
  public  $cool_blooded;

  public function __construct($data_nama, $legs, $cool_blooded)
  {
    $this->name = $data_nama;
    $this->legs = $legs;
    $this->cool_blooded = $cool_blooded;
  }
}
