<!-- 2. Class with Constructors and Destructors
Create a class Book with attributes: title and author.
• Use a constructor to initialize these attributes.
• Use a destructor to print a goodbye message when the object is destroyed. -->

<?php
    class Book{
        private $title;
        private $author;

        function __construct($title, $author){
            $this->title = $title;
            $this->author = $author;
        }

        function __destruct(){
            echo "Goodbye! The book object for '" . $this->title . "' is being destroyed.<br/>";
        }
    }

    $book1 = new Book("1984", "George Orwell");
    $book2 = new Book("To Kill a Mockingbird", "Harper Lee");

    echo "<h3>Books objects created.</h3>";

    unset($book1);
    unset($book2);
?>