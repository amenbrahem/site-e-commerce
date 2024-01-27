<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="styleadmi.css">

  
</head>
<body>

  <header>
    <h1 style="margin: 0;">Admin Panel</h1>
  </header>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name"  required>

    <label for="product_image">Product Image URL:</label>
    <input type="text" id="product_image" name="product_image"  required>

    <label for="product_price">Product Price:</label>
    <input type="text" id="product_price" name="product_price" required>

    <label for="product_category">Product Category:</label>
    <select id="product_category" name="product_category" required>
        <option value="PC GAMING">PC GAMING</option>
        <option value="peripherique">peripherique</option>
        <option value="audio/video">audio/video</option>
        <option value="portable">portable</option>

    </select>
    <button type="submit" name="add_product">add Product</button>
  </form>

<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    // Include your database connection file or create a connection here
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

    // Collect form data
    $product_name = $_POST["product_name"];
    $product_image = $_POST["product_image"];
    $product_price = $_POST["product_price"];
    $product_category = $_POST["product_category"];

    // Validate input (add more validation as needed)
    if (empty($product_name) || empty($product_image) || empty($product_price) || empty($product_category)) {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    } else {
        // Your database insertion logic here using mysqli
        $sql = "INSERT INTO products (product_name, product_image, product_price, product_category) VALUES ('$product_name', '$product_image', '$product_price', '$product_category')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Product added successfully!</p>";

            // Optionally, you can clear the form fields
            $_POST = array();
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name"  required>
    <label for="product_category">Product Category:</label>
    <select id="product_category" name="product_category" required>
        <option value="PC GAMING">PC GAMING</option>
        <option value="peripherique">peripherique</option>
        <option value="audio/video">audio/video</option>
        <option value="portable">portable</option>

    </select>
    <button type="submit" name="delete_product">Delete Product</button>

  </form>
  <?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {
  // Include your database connection file or create a connection here
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

    // Collect form data
    $product_name = $_POST["product_name"];
    

    // Validate input (add more validation as needed)
    if (empty($product_name)) {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    } else {
        // Your database insertion logic here using mysqli
        $sql = "DELETE FROM products WHERE product_name='$product_name'" ;
        

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Product deleted successfully!</p>";

            // Optionally, you can clear the form fields
            $_POST = array();
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
</body>
</html>
