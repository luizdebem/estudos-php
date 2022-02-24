<?php
  include "db.php";
  include "models/product.php";

  function fetchProducts() {
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM products;");
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    $productsArray = [];
    foreach($products as $product) {
      array_push($productsArray, new Product($product["name"], $product["price"], $product["id"]));
    }
    return $productsArray;
  }

  // TODO

  // function createProduct(Product $p) {
  //   global $pdo;
  //   $pdo->prepare("INSERT INTO products (name, price) VALUES ('$p->getName()', $p->getPrice());");
  // }

  // function updateProduct(Product $p, $id) {
  //   global $pdo;
  //   $pdo->prepare("UPDATE products SET name = '$p->getName' WHERE id ");
  // }

  // function deleteProduct($id) {
  //   global $pdo;
  //   $pdo->prepare("DELETE FROM products WHERE id = 8;");
  // }
