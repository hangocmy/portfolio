<?php
// Get the product data
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);


// Validate inputs
if($code == NULL || $name == NULL || $price == NULL || $price == FALSE) {
  $error = "Invalid data. Check all fields and try again.";
}

else{
  require_once('./db/portfolio.php');

  // Add the product to the database  
  $query = 'INSERT INTO products (productCode, productName, listPrice)
            VALUES (:code, :name, :price)';

  $statement = $db->prepare($query);

  $statement->bindValue(':code', $code);
  $statement->bindValue(':name', $name);
  $statement->bindValue(':price', $price);

  $statement->execute();
  $statement->closeCursor();

  // Display the Product List page
  include('index2.php');
}
?>