<!-- 6. Library Management (Abstract Class)
Create an abstract class LibraryItem with methods getDetails() and borrowItem().
• Subclasses: Book and Magazine implementing methods.
• Demonstrate borrowing items. -->
<?php
    abstract class LibraryItem {
        protected $title;
        protected $author;
        protected $isBorrowed = false;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }

        abstract public function getDetails();

        public function borrowItem() {
            if ($this->isBorrowed) {
                echo "Sorry, '$this->title' is already borrowed.<br/>";
            } else {
                $this->isBorrowed = true;
                echo "You have successfully borrowed '$this->title'.<br/>";
            }
        }
    }

    class Book extends LibraryItem {
        public function getDetails() {
            return "Book: '$this->title' by $this->author";
        }
    }

    class Magazine extends LibraryItem {
        public function getDetails() {
            return "Magazine: '$this->title' by $this->author";
        }
    }

    $book1 = new Book("2000", "ABC");
    $magazine1 = new Magazine("Oldboy", "XYZ");
    echo $book1->getDetails() . "<br/>";
    $book1->borrowItem();

    echo $magazine1->getDetails() . "<br/>";
    $magazine1->borrowItem();
    $magazine1->borrowItem(); 
?>