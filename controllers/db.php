<?php
  global $pdo;
  $pdo = new PDO("mysql:host=localhost;port=3306;db=store", '', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->query("USE store;");