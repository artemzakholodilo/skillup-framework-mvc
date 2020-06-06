<?php

namespace App\Model\Statistic;

class Order
{
    protected int $id;

    protected \DateInterval $period;

    protected float $summary;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateInterval
     */
    public function getPeriod(): \DateInterval
    {
        return $this->period;
    }

    /**
     * @param \DateInterval $period
     */
    public function setPeriod(DateInterval $period): void
    {
        $this->period = $period;
    }

    /**
     * @return float
     */
    public function getSummary(): float
    {
        return $this->summary;
    }

    /**
     * @param float $summary
     */
    public function setSummary(float $summary): void
    {
        $this->summary = $summary;
    }
}