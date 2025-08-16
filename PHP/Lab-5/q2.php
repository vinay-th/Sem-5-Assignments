<!-- 
To develope a simple Restaurant Billing System using PHP. The
system should allow storage of the restaurant's menu. Customers can
order multiple items in varying quantities. Generate bill should have a
detailed bill including item-wise totals, subtotal, and GST (at 18%). -->
<?php
    $menu = array(
        array("id" => 1,"Category" => "Starters", "Item" => "Spring Roll", "Price" => 120),
        array("id" => 2,"Category" => "Starters", "Item" => "Paneer Tikka", "Price" => 180),
        array("id" => 3,"Category" => "Main Course", "Item" => "Butter Paneer", "Price" => 250),
        array("id" => 4,"Category" => "Main Course", "Item" => "Veg Biryani", "Price" => 200),
        array("id" => 5,"Category" => "Desserts", "Item" => "Gulab Jamun", "Price" => 60),
        array("id" => 6,"Category" => "Desserts", "Item" => "Ice Cream", "Price" => 80),
    )
?>

<h1>
    Restaurant Menu
</h1>
<hr/>
<form action="" method="post">
    <table border="1">
        <tr>
            <th>Category</th>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($menu as $item): ?>
            <tr>
                <td><?php echo $item["Category"]; ?></td>
                <td><?php echo $item["Item"]; ?></td>
                <td><?php echo $item["Price"]; ?></td>
                <td>
                    <select name="quantity_<?php echo $item["id"]; ?>">
                        <option value="0">Select Quantity</option>
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <input type="submit" name="generate_bill" value="Generate Bill">
</form>
<hr/>

<?php
    if (isset($_POST["generate_bill"])) {
        echo "<h1>Bill Summary</h1>";
        $selected_items = array();
        foreach ($menu as $item) {
            $quantity = $_POST["quantity_" . $item["id"]];
            if ($quantity > 0) {
                $selected_items[] = array(
                    "Item" => $item["Item"],
                    "Price" => $item["Price"],
                    "Quantity" => $quantity
                );
            }
        }

        if (count($selected_items) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Item</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
            $subtotal = 0;
            foreach ($selected_items as $item) {
                $total = $item["Price"] * $item["Quantity"];
                $subtotal += $total;
                echo "<tr>
                        <td>{$item["Item"]}</td>
                        <td>{$item["Price"]}</td>
                        <td>{$item["Quantity"]}</td>
                        <td>$total</td>
                      </tr>";
            }
            $gst = $subtotal * 0.18;
            $grand_total = $subtotal + $gst;
            echo "<tr>
                    <td colspan='3'>Subtotal</td>
                    <td>$subtotal</td>
                  </tr>";
            echo "<tr>
                    <td colspan='3'>GST (18%)</td>
                    <td>$gst</td>
                  </tr>";
            echo "<tr>
                    <td colspan='3'>Grand Total</td>
                    <td>$grand_total</td>
                  </tr>";
            echo "</table>";
        } else {
            echo "No items selected.";
        }
    }
?>