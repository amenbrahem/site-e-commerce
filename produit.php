<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
  <link rel="stylesheet" href="styles.css">


  <title>ViaStore - E-commerce Website</title>
</head>
<body>

  <header>
    <h1 style="margin: 0;">ViaStore</h1>
    
  </header>

  <nav>
    <a href="acceuil.php">Home</a>
    <a href="#">About</a>
    <a href="panier.php" >Panier <i class="fa-solid fa-cart-shopping"></i></a>
  </nav>
  

  <button id="prod-menu" onmouseover="showCategories()" onmouseout="hideCategories()">
    <span>show category</span>


  </button>
  <div id="prod-list" onmouseover="showCategories()" onmouseout="hideCategories()">
  <ul>
    <li><a href="pc_gaming.php">- PC GAMING</a></li>
    <li><a href="portable.php">- Portable</a></li>
    <li><a href="audio_video.php">- Audio/Video</a></li>
    <li><a href="peripherals.php">- Peripheral</a></li>
  </ul>
</div>


  <div class="container">
  <?php
    // Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    // Display the products
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="product ' . $row['product_category'] . '">';
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="product_name" value="' . $row['product_name'] . '">';
        echo '<input type="hidden" name="product_price" value="' . $row['product_price'] . '">';
        echo '<input type="hidden" name="product_image" value="' . $row['product_image'] . '">';
        echo '<input type="hidden" name="product_category" value="' . $row['product_category'] . '">';
        echo '<img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '">';
        echo '<h3>' . $row['product_name'] . '</h3>';
        echo '<p>' . $row['product_price'] . '</p>';
        echo '<button type="submit" name="add_to_cart" class="add-to-cart-btn">Add to Cart</button>';
        echo '</form>';
        echo '</div>';
    }
    

if (isset($_POST['add_to_cart'])) {
  $product_name = $_POST['product_name'];

  $check_query = "SELECT * FROM panier WHERE product_name = '$product_name'";
  $check_result = $conn->query($check_query);

  if ($check_result->num_rows > 0) {

      echo 'Product is already in the cart.';
  } else {
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];
      $product_category = $_POST['product_category'];

      // Insert data into the "panier" table
      $insert_query = "INSERT INTO panier (product_name, product_image, product_price,  product_category) VALUES ('$product_name','$product_image','$product_price', '$product_category')";
      if ($conn->query($insert_query) === TRUE) {
          echo 'Product added to the cart.';
      } else {
          echo 'Error adding product to the cart: ' . $conn->error;
      }
  }
}
  }
    ?>
  </div>
 
    <script src="script.js"></script>

    	<video id="video-background" autoplay muted loop>
    <source src="anime3.mp4" type="video/mp4">
  </video>
</body>
</html>
