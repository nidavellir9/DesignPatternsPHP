<?php

abstract class AbstractBookTopic
{
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}

class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    function __construct($topic_in)
    {
        $this->topic = $topic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    //This is the end of the chain - returns title or says there is none
    function getTitle()
    {
        if (NULL != $this->title)
        {
            return $this->title;
        }
        else
        {
            return 'There is no title available'."<br />";
        }
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

class BookSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    function __construct($topic_in, BookTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    function getParentTopic()
    {
        return $this->parentTopic;
    }

    function getTitle()
    {
        if (NULL != $this->title)
        {
            return $this->title;
        }
        else
        {
            return $this->parentTopic->getTitle();
        }
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

class BookSubSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    function __construct($topic_in, BookSubTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    function getParentTopic()
    {
        return $this->parentTopic;
    }

    function getTitle()
    {
        if (NULL != $this->title)
        {
            return $this->title;
        }
        else
        {
            return $this->parentTopic->getTitle();
        }
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

?>