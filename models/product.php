<?php
class Product {
  private $id;
  private $name;
  private $price;

  public function __construct($name, $price, $id) {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getId() {
    return $this->id;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

}
