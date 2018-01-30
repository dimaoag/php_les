<?php
namespace alex;

/**
 * Sorting algorithm
 * @author John
 *
 */

class Order
{

    /**
     * @param array $data
     * @return array
     */

    public function run(array $data):array {

        return sort($data);
    }

}