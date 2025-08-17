<!-- 7. Create a multidimensional array for a book catalog with book name, author, price, and category. Display all books, then filter and show only books with price > ₹300. -->

<?php 
    $books = array(
        array("name" => "Book A", "author" => "Author 1", "price" => 250, "category" => "Fiction"),
        array("name" => "Book B", "author" => "Author 2", "price" => 350, "category" => "Non-Fiction"),
        array("name" => "Book C", "author" => "Author 3", "price" => 450, "category" => "Science"),
        array("name" => "Book D", "author" => "Author 4", "price" => 200, "category" => "History"),
        array("name" => "Book E", "author" => "Author 5", "price" => 500, "category" => "Technology"),
        array("name" => "Book F", "author" => "Author 6", "price" => 300, "category" => "Fiction"),
    );
?>

<h1>All the books</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['name']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['price']; ?></td>
            <td><?php echo $book['category']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Books greater than 300</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
    <?php foreach ($books as $book): ?>
        <?php if($book["price"] > 300): ?>
            <tr>
                <td><?php echo $book['name']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['price']; ?></td>
                <td><?php echo $book['category']; ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>