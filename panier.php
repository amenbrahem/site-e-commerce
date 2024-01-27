<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>ViaStore - Panier</title>
    
   
</head>
<body>

<header>
    <h1>ViaStore</h1>
</header>

<nav>
    <a href="acceuil.php">Accueil</a>
    <a href="produit.php" onmouseover="showCategories()" >Produits</a>
    <a href="login.php">Déconnexion</a>
</nav>

<!-- Liste des catégories à afficher lors du survol -->
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
    $sql = "SELECT * FROM panier ";
    $result = $conn->query($sql);

    // Display the products
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product ' . $row['product_category'] . '">';
            echo '<img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '">';
            echo '<h3>' . $row['product_name'] . '</h3>';
            echo '<p>' . $row['product_price'] . '</p>';
            echo '<button class="add-to-cart-btn">Add to Cart</button>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
    ?>
    <script src="script.js"></script>
    <video id="video-background" autoplay muted loop>
    <source src="anime3.mp4" type="video/mp4">
  </video>
</body>
</html>
