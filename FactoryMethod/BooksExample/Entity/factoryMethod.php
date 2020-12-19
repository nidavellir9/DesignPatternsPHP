<?php

abstract class AbstractFactoryMethod
{
    abstract function makePHPBook($param);
}

class OReillyFactoryMethod extends AbstractFactoryMethod
{
    private $context = "OReilly";

    /**
     * OReilly Factory
     *
     * @param [string] $param
     * @return AbstractPHPBook
     */
    function makePHPBook($param): AbstractPHPBook
    {
        $book = NULL;

        switch ($param) {
            case 'us':
                $book = new OReillyPHPBook;
            break;
            case 'other':
                $book = new SamsPHPBook;
            break;
            default:
                $book = new OReillyPHPBook;
            break;
        }
        return $book;
    }
}

class SamsFactoryMethod extends AbstractFactoryMethod
{
    private $context = "Sams";

    /**
     * Sams Factory
     *
     * @param [string] $param
     * @return AbstractPHPBook
     */
    function makePHPBook($param): AbstractPHPBook
    {
        $book = NULL;

        switch ($param) {
            case 'us':
                $book = new SamsPHPBook;
            break;
            case 'other':
                $book = new OReillyPHPBook;
            break;
            case 'otherother':
                $book = new VisualQuickstartPHPBook;
            break;
            default:
                $book = new SamsPHPBook;
            break;
        }
        return $book;
    }
}

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}

abstract class AbstractPHPBook extends AbstractBook
{
    private $subject = "PHP";
}

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private static $oddOrEven = "odd";

    public function __construct()
    {
        //Alternate between 2 books
        if ('odd' == self::$oddOrEven)
        {
            $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
            $this->title  = 'Programming PHP';
            self::$oddOrEven = 'even';
        }
        else
        {
            $this->author = 'David Sklar and Adam Trachtenberg';
            $this->title  = 'PHP Cookbook'; 
            self::$oddOrEven = 'odd';
        }
    }

    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}

class SamsPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    function __construct()
    {
        //Alternate randomly between 2 books
        mt_srand((double)microtime()*10000000);
        $rand_num = mt_rand(0,1);

        if (1 > $rand_num)
        {
            $this->author = 'George Schlossnagle';
            $this->title = 'Advanced PHP Programming';
        }
        else
        {
            $this->author = 'Christian Wenz';
            $this->title  = 'PHP Phrasebook'; 
        }
    }

    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}

class VisualQuickstartPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    function __construct()
    {
        $this->author = 'Larry Ullman';
        $this->title  = 'PHP for the World Wide Web';
    }

    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}
?>