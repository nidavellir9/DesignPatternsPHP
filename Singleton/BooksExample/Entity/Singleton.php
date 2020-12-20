<?php
/**
 * Singleton classes
 */
class BookSingleton
{
    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title = 'Design Patterns';
    private static $book = NULL;
    private static $isLoanedOut = false;

    private function __construct() {
    }

    static function borrowBook()
    {
        if (false == self::$isLoanedOut)
        {
            if (NULL == self::$book)
            {
                self::$book = new BookSingleton();
            }
            self::$isLoanedOut = true;

            return self::$book;
        }
        else
        {
            return NULL;
        }
    }

    function returnBook(BookSingleton $bookReturned)
    {
        self::$isLoanedOut = false;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getAuthorAndTitle()
    {
        return $this->getAuthor() . ' by ' . $this->getTitle();
    }
}

class BookBorrower
{
    private $borrowedBook;
    private $haveBook = false;

    function __construct(){
    }

    function getAuthorAndTitle()
    {
        if (true == $this->haveBook)
        {
            return $this->borrowedBook->getAuthorAndTitle();
        }
        else
        {
            return "I don't have the book";
        }
    }

    function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == NULL)
        {
            $this->haveBook = false;
        }
        else
        {
            $this->haveBook = true;
        }
    }

    function returnBook()
    {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}
?>