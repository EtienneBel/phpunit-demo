<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Cart
{
    private int $id;

    private float $price;

    private static float $tax = 1.2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getNetPrice(): float
    {
        return $this->price * self::$tax;
    }
}
