<?php

use App\Entity\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCorrectNetPrieIsReturned()
    {
        $cart = new Cart();
        $cart->setPrice(10);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(17, $netPrice);
    }
}
