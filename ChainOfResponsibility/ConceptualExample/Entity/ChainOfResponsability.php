<?php

/**
 * The Handler interface declares a method for building the chain of handlers.
 * It also declares a method for executing a request.
 */
interface Handler
{
    public function setNext(Handler $handler): Handler;
    public function handle(string $request): ?string;
}

/**
 * The default chaining behavior can be implemented inside a base handler class.
 */
abstract class AbstractHandler implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        //Returning a handler from here will let us link handlers in a
        //convenient way like this:
        //$monkey->setNext($squirrel)->setNext($dog);

        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler)
        {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

/**
 * All Concrete Handlers either handle a request or pass it to the next handler
 * in the chain.
 */
class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana")
        {
            return "Monkey: I'll eat the " . $request . "<br />";
        }
        else
        {
            return parent::handle($request);
        }
    }
}

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut")
        {
            return "Squirrel: I'll eat the " . $request . "<br />";
        }
        else
        {
            return parent::handle($request);
        }
    }
}

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall")
        {
            return "Dog: I'll eat the " . $request . "<br />";
        }
        else
        {
            return parent::handle($request);
        }
    }
}
?>