<?php

abstract class LibraryItem {
    protected $id;
    protected $title;

    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    // Abstract methods to be implemented by subclasses
    abstract public function getDetails();
    abstract public function checkAvailability();
}

// Book class extending LibraryItem
class Book extends LibraryItem {
    private $author;
    private $available;

    public function __construct($id, $title, $author, $available) {
        parent::__construct($id, $title);
        $this->author = $author;
        $this->available = $available;
    }

    public function getDetails() {
        return "Book: " . $this->title . " by " . $this->author;
    }

    public function checkAvailability() {
        return $this->available ? "Available" : "Not Available";
    }
}



// Example usage
$book = new Book(1, "1984", "George Orwell", true);
echo $book->getDetails() . "<br>";
echo "Availability: " . $book->checkAvailability() . "<br>";

echo "<br>";


?>
