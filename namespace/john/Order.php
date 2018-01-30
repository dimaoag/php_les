<?php
namespace john;
/**
 * Order logic
 * @author Alex
 *
 */

class Order
{
    private $price;

    const DEFAULT_DISCOUNT = 1;

    /**
     * @param int $discount
     * @return float
     */

    public function getPrice(int $discount = self::DEFAULT_DISCOUNT):float {
        return $this->price * $discount;
    }

}