<!-- Define a multidimensional array to store product catalog
Display all products
Filter and display products with price > 500 -->
<?php
    $products = array(
        array("Name" => "Wireless Mouse", "Price" => 350, "Category" => "Electronics"),
        array("Name" => "Bluetooth Speaker", "Price" => 1200, "Category" => "Electronics"),
        array("Name" => "Notebook", "Price" => 80, "Category" => "Stationary"),
        array("Name" => "Pen drive 64GB", "Price" => 700, "Category" => "Electronics"),
        array("Name" => "Water bottle", "Price" => 150, "Category" => "Home & Kitchen"),
        array("Name" => "Desk Lamp", "Price" => 950, "Category" => "Home & Kitchen"),
    );
?>

<h2>All Products</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
    </tr>   
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product["Name"]; ?></td>
            <td><?php echo $product["Price"]; ?></td>
            <td><?php echo $product["Category"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Products with Price > 500</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <?php if ($product["Price"] > 500): ?>
            <tr>
                <td><?php echo $product["Name"]; ?></td>
                <td><?php echo $product["Price"]; ?></td>
                <td><?php echo $product["Category"]; ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>
