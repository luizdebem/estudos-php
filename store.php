<?php
include "./partials/header.php";
include "./controllers/store_controller.php";
?>

<h1>Loja</h1>

<p>Itens disponíveis:</p>

<table>
  <tr>
    <th>Nome</th>
    <th>Preço</th>
  </tr>
  <?php
  $products = fetchProducts();
  foreach ($products as $product) {
    echo "<tr>
            <td>".$product->getName()."</td>
            <td>".$product->getPrice()."</td>
          </tr>";
  }
  ?>
</table>

<?php include "./partials/footer.php"; ?>