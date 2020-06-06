<?php

# js module
# import Order from './order.js'
// src => \App
// src/Model => \App\Model
namespace App\Model;

/**
 * Class Order
 */
class Order
{

    protected int $id;

    protected $summaryPrice;

    protected $userId;

    private bool $status;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSummaryPrice()
    {
        return $this->summaryPrice;
    }

    /**
     * @param mixed $summaryPrice
     */
    public function setSummaryPrice($summaryPrice)
    {
        $this->summaryPrice = $summaryPrice;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function complete()
    {
        return $this->status;
    }

    public function saveToDb()
    {
        if ($this->summaryPrice > 100500) {
            return $this->log();
        }
    }

}

function testNameSpace()
{
    echo "Hello from function";
}
