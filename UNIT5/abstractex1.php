<?php
// Abstract class
abstract class LibraryItem {
    protected $title;
    protected $uniqueID;

    public function __construct($title) {
        $this->title = $title;
        $this->uniqueID = uniqid(); // Generate a unique ID for each item
    }

    public function getTitle() {
        return $this->title;
    }

    abstract public function getDetails(); // Abstract method for item details
    abstract public function checkAvailability(); // Abstract method for availability
}

// Book class
class Book extends LibraryItem {
    private $author;
    private $publisher;
    private $totalPages;
    private $isAvailable;

    public function __construct($title, $author, $publisher, $totalPages) {
        parent::__construct($title);
        $this->author = $author;
        $this->publisher = $publisher;
        $this->totalPages = $totalPages;
        $this->isAvailable = true; // Assume book is initially available
    }

    public function getDetails() {
        echo "Title: $this->title<br>";
        echo "Author: $this->author<br>";
        echo "Publisher: $this->publisher<br>";
        echo "Total Pages: $this->totalPages<br>";
    }

    public function checkAvailability() {
        return $this->isAvailable ? "Available" : "Checked Out";
    }
}

// Magazine class
class Magazine extends LibraryItem {
    private $issueNumber;
    private $publicationMonth;
    private $isAvailable;

    public function __construct($title, $issueNumber, $publicationMonth) {
        parent::__construct($title);
        $this->issueNumber = $issueNumber;
        $this->publicationMonth = $publicationMonth;
        $this->isAvailable = true;
    }

    public function getDetails() {
        echo "Title: $this->title<br>";
        echo "Issue Number: $this->issueNumber<br>";
        echo "Publication Month: $this->publicationMonth<br>";
    }

    public function checkAvailability() {
        return $this->isAvailable ? "Available" : "Checked Out";
    }
}

// DVD class
class DVD extends LibraryItem {
    private $director;
    private $duration;
    private $isAvailable;

    public function __construct($title, $director, $duration) {
        parent::__construct($title);
        $this->director = $director;
        $this->duration = $duration;
        $this->isAvailable = true;
    }

    public function getDetails() {
        echo "Title: $this->title<br>";
        echo "Director: $this->director<br>";
        echo "Duration: $this->duration minutes<br>";
    }

    public function checkAvailability() {
        return $this->isAvailable ? "Available" : "Checked Out";
    }
}

// Usage Example
$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", "Scribner", 180);
$magazine = new Magazine("National Geographic", "202", "October 2024");
$dvd = new DVD("Inception", "Christopher Nolan", 148);

echo "<strong>Book Details:</strong><br>";
$book->getDetails();
echo "Availability: " . $book->checkAvailability() . "<br><br>";

echo "<strong>Magazine Details:</strong><br>";
$magazine->getDetails();
echo "Availability: " . $magazine->checkAvailability() . "<br><br>";

echo "<strong>DVD Details:</strong><br>";
$dvd->getDetails();
echo "Availability: " . $dvd->checkAvailability() . "<br>";
?>
