<?php
function displayProductsByCategory($category)
{
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

    // Fetch data from the database based on the provided category
    $sql = "SELECT * FROM products WHERE product_category='$category'";
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
    }

    // Add the following PHP code after the while loop
    if (isset($_POST['add_to_cart'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_category = $_POST['product_category'];

        // Insert data into the "panier" table
        $insert_query = "INSERT INTO panier (product_name, product_image, product_price, product_category) VALUES ('$product_name','$product_image','$product_price', '$product_category')";
        if ($conn->query($insert_query) === TRUE) {
        }
    }

    // Close the database connection
    $conn->close();
}
?>
