<?php

interface Product
{
    public function getName(): string;
    public function getPrice(): float;
}

class Shirt implements Product
{
    protected $price;
    protected $name;

    const TAX_RATE = 1.1;

    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function getName(): string
    {
        return "Shirt {$this->name}";
    }

    public function getPrice(): float
    {
        return $this->price * self::TAX_RATE;
    }
}

class TV implements Product
{
    protected $price;
    protected $name;

    const TAX_RATE = 1.23;

    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function getName(): string
    {
        return "TV $this->name";
    }

    public function getPrice(): float
    {
        return $this->price * self::TAX_RATE;
    }
}

abstract class ProductDecorator implements Product
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public abstract function getName(): string;

    public abstract function getPrice(): float;
}

class WinterSale extends ProductDecorator
{
    const DISCOUNT_FACTOR = 0.5;

    public function getName(): string
    {
        return "WINTER SALE 50% OFF - {$this->product->getName()} ONLY {$this->product->getPrice()} USD";
    }

    public function getPrice(): float
    {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }
}

class SummerSale extends ProductDecorator
{
    const DISCOUNT_FACTOR = 0.9;

    public function getName(): string
    {
        return "SUMMER SALE 10% OFF - {$this->product->getName()} ONLY {$this->getPrice()} USD";
    }

    public function getPrice(): float
    {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }
}
?>