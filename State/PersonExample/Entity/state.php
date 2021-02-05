<?php

class Person
{
    private $currentMood;
    private $name;

    public function __construct(Mood $mood, string $name)
    {
        $this->setState($mood);
        $this->name = $name;
    }

    public function setState(Mood $mood): void
    {
        $this->currentMood = $mood;
    }

    public function insult(): void
    {
        $this->currentMood->insult($this);
    }

    public function getName(): void
    {
        $this->currentMood->getName($this, $this->name);
    }

    public function hug(): void
    {
        $this->currentMood->hug($this);
    }

    public function say(string $message): void
    {
        echo ($message . PHP_EOL);
    }
}

abstract class Mood
{
    public abstract function insult(Person $context);
    public abstract function hug(Person $context);
    public abstract function getName(Person $context, string $name);
}

class Happy extends Mood
{
    public function insult(Person $context)
    {
        $context->say("Oh! That wasn't nice");
        $context->setState(new Neutral());
    }

    public function hug(Person $context)
    {
        $context->say("Oh! That was nice, thanks");
    }

    public function getName(Person $context, string $name)
    {
        $context->say("Oh! Hello dear friend. My name is {$name}");
    }
}

class Neutral extends Mood
{
    public function insult(Person $context)
    {
        $context->say("What the heck do you want?");
        $context->setState(new Angry());
    }

    public function hug(Person $context)
    {
        $context->say("Thanks");
        $context->setState(new Happy());
    }

    public function getName(Person $context, string $name)
    {
        $context->say("My name is {$name}");
    }
}

class Angry extends Mood
{
    public function insult(Person $context)
    {
        $context->say("You too...");
    }

    public function hug(Person $context)
    {
        $context->say("Hm...");
        $context->setState(new Neutral());
    }

    public function getName(Person $context, string $name)
    {
        $context->say("{$name}. What's your problem?");
    }
}
?>