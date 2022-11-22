
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<!-- the body section -->
<body>
  <header>
    <h1>My Table</h1>
    <hr>
  </header>


  <section>
    <h1>Add Item Form</h1>

    <form action="add_item.php" method="post">
      <label>Code:</label>
      <input type="text" name="code"><br>

      <label>Name:</label>
      <input type="text" name="name"><br>

      <label>List Price:</label>
      <input type="text" name="price"><br>

      <label>&nbsp;</label>
      <input type="submit" value="Add"><br>
    </form>

    
    <br>
    <a href="index2.php">Back to home page</a>
  </section>


  <footer>
    <hr>
    <p>&copy; 51800081 | hangocmy</p>
  </footer>
</body>
</html>