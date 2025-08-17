<!-- 10. Develop a simple Shopping Bill System using PHP. Create a form where customers can select items (with predefined prices) and quantities. Calculate item-wise totals, subtotal, discount (10% if total > ₹1000), and final amount. -->
<form action="q10.php" method="post">
    <label for="item">Select Item:</label>
    <select id="item" name="item">
        <option value="item1" data-price="100">Item 1 - ₹100</option>
        <option value="item2" data-price="200">Item 2 - ₹200</option>
        <option value="item3" data-price="300">Item 3 - ₹300</option>
    </select>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" value="1" required />
    <input type="submit" value="Calculate Bill" />
</form>

<?php
    $itemPrices = [
        'item1' => 100,
        'item2' => 200,
        'item3' => 300
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedItem = $_POST["item"];
        $quantity = $_POST["quantity"];
        $itemPrice = $itemPrices[$selectedItem] * $quantity;

        // Calculate subtotal
        $subtotal = $itemPrice;

        // Calculate discount
        $discount = ($subtotal > 1000) ? $subtotal * 0.1 : 0;

        // Calculate final amount
        $finalAmount = $subtotal - $discount;

        // Display the bill
        echo "<h2>Shopping Bill</h2>";
        echo "<p>Item: $selectedItem</p>";
        echo "<p>Quantity: $quantity</p>";
        echo "<p>Subtotal: ₹$subtotal</p>";
        echo "<p>Discount: ₹$discount</p>";
        echo "<p>Final Amount: ₹$finalAmount</p>";
    }
?>  