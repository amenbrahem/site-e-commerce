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
  <a href="produit.php">Visit ViaStore</a>
    
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
include 'product_display.php';

$categoryToDisplay = 'portable';

displayProductsByCategory($categoryToDisplay);
?>

  </div>

        <script src="script.js"></script>

    	<video id="video-background" autoplay muted loop>
    <source src="anime3.mp4" type="video/mp4">
  </video>
</body>
</html>
