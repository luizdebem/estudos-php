<?php
include "./partials/header.php";
?>

<?php
$username = $password = "asdasd";
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $submitted = true;
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Login</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="input">
    <span>Usuário</span>
    <input type="text" name="username">
    <?php
      if ($submitted && empty($username)) echo '<span class="input-error">Campo obrigatório</span>';
    ?>
  </div>

  <div class="input">
    <span>Senha</span>
    <input type="password" name="password">
    <?php
      if ($submitted && empty($password)) echo '<span class="input-error">Campo obrigatório</span>';
    ?>
  </div>

  <button type="submit">Entrar</button>
</form>
<?php include "./partials/footer.php"; ?>