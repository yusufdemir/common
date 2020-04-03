<?php

namespace Payconn\Common\Traits;

trait Amount
{
    protected $amount;

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
