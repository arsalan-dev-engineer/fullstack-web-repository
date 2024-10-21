<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>

<body>
    <!-- Python Crash Course -->
    <!-- Form for submitting data to bookstore.php-->
    <form action="bookstore.php" method="post">
        <label>Python Crash Course</label><br>
        <label>Quantity</label><br>
        <input type="text" name="quantity1" placeholder="Enter quantity" required>
        <input type="submit" value="total">
    </form>
    <br><br><br>

    <!-- HTML5 Programming -->
    <!-- Form for submitting data to bookstore.php-->
    <form action="bookstore.php" method="post">
        <label>HTML5 Programming</label><br>
        <label>Quantity</label><br>
        <input type="text" name="quantity2" placeholder="Enter quantity" required>
        <input type="submit" value="total">
    </form>
    <br><br><br>

    <!-- Practical Packet Analysis -->
    <!-- Form for submitting data to bookstore.php-->
    <form action="bookstore.php" method="post">
        <label>Practical Packet Analysis</label><br>
        <label>Quantity</label><br>
        <input type="text" name="quantity3" placeholder="Enter quantity" required>
        <input type="submit" value="total">
    </form>

</body>

</html>

<?php
# Define book names and prices
$book1 = "Python Crash Course";
$price1 = 24.99;

$book2 = "HTML5 Programming";
$price2 = 21.99;

$book3 = "Practical Packet Analysis";
$price3 = 22.99;

# Function to calculate total cost and display order details
function calculateTotal($quantity, $price, $bookName)
{
    # Check if quantity is a valid number and greater than 0
    if (is_numeric($quantity) && $quantity > 0) {
        # Calculate total cost
        $total = $quantity * $price;
        # Display order details
        echo "<br>You've ordered $quantity x $bookName.<br>";
        echo "Total: £$total<br>";
    } else {
        # Display error message if quantity is invalid
        echo "<br>Invalid quantity entered for $bookName.<br>";
    }
}

# Check if quantity for Python Crash Course is set
if (isset($_POST["quantity1"])) {
    # Get and calculate total for Python Crash Course
    calculateTotal($_POST["quantity1"], $price1, $book1);
}

# Check if quantity for HTML5 Programming is set
if (isset($_POST["quantity2"])) {
    # Get and calculate total for HTML5 Programming
    calculateTotal($_POST["quantity2"], $price2, $book2);
}

# Check if quantity for Practical Packet Analysis is set
if (isset($_POST["quantity3"])) {
    # Get and calculate total for Practical Packet Analysis
    calculateTotal($_POST["quantity3"], $price3, $book3);
}
?>
