<?php

abstract class AbstractObserver
{
    abstract function update(AbstractSubject $subject_id);
}

abstract class AbstractSubject
{
    abstract function attach(AbstractObserver $observer_id);
    abstract function detach(AbstractObserver $observer_id);
    abstract function notify();
}

class PatternObserver extends AbstractObserver
{
    public function __construct(){
    }

    public function update(AbstractSubject $subject)
    {
        writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
        writeln('New favorite patterns: '. $subject->getFavorites());
        writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');
        writeln('');
    }
}

class PatternSubject extends AbstractSubject
{
    private $favoritePatterns = NULL;
    private $observers = array();

    public function __construct(){
    }

    function attach(AbstractObserver $observer_id)
    {
        //Could also use array_push($this->observers, $observer_id);
        $this->observers[] = $observer_id;
    }

    function detach(AbstractObserver $observer_id)
    {
        //$okey = array_search($observer_id, $this->observers);
        foreach ($this->observers as $okey => $oval)
        {
            if ($oval == $observer_id)
            {
                unset($this->observers[$okey]);
            }
        }
    }

    function notify()
    {
        foreach ($this->observers as $obs)
        {
            $obs->update($this);
        }
    }

    function updateFavorites($newFavorites)
    {
        $this->favoritePatterns = $newFavorites;
        $this->notify();
    }

    function getFavorites()
    {
        return $this->favoritePatterns;
    }
}

function writeln($line_in)
{
    echo $line_in . "<br />";
}
?>