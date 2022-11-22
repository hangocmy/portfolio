<?php
  //connect to database
  require_once('./db/portfolio.php');

  //get products
  $queryProducts = 'SELECT *
                    FROM products
                    WHERE productID
                    ORDER BY productID';

  $statement3 = $db->prepare($queryProducts);
  $statement3->execute();
  
  $products = $statement3->fetchAll();
  $statement3->closeCursor();
?>


<!DOCTYPE html>
<html>

<head>
  <title>My Table</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h1>My Table</h1>
    <hr>
  </header>

  <section>
    <!-- display a table of products -->
    <table>
      <tr>
        <th>Code</th>
        <th>Name</th>
        <th class="right">Price</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach ($products as $product) : ?>

      <tr>
        <td><?php echo $product['productCode']; ?></td>
        
        <td><?php echo $product['productName']; ?></td>
        
        <td class="right"><?php echo $product['listPrice']; ?></td>
      
        <td>
          <form action="delete_item.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
            <input type="submit" value="Delete">
          </form>
        </td>

        <td>
          <a href="update_item_page.php">Update</a>
        </td>

      </tr>

      <?php endforeach; ?>
    </table>

    <br>
      <a href="add_item_page.php">Go to add item page</a>
  </section>


  <footer>
    <hr>
    <p>&copy; 51800081 | hangocmy</p>
  </footer>

</body>
</html>