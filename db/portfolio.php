<?php
  $host = 'mysql:host=127.0.0.1;dbname=portfolio';
  $username = 'root';
  $password = '';

  $db = new MongoDB\Client('mongodb+srv://hangocmy:bemi@1909@cluster0.vzqufnc.mongodb.net/?retryWrites=true&w=majority');

  //$db = new MongoClient($host, $username, $password);
?>