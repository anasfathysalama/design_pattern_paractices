<?php

namespace OOP\EncapsulateWhatVaries;

class PaymentTypes
{
   protected string $method ;

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    public function createMethod($paymentType)
    {
        if($paymentType === 'online'){
            // create online resource
            $this->setMethod('online');
        }elseif ($paymentType === 'cache'){
            // create cache resource
            $this->setMethod('cache');
        }elseif ($paymentType === 'credit'){
            // create credit resource
            $this->setMethod('credit');
        }

        return $this->getMethod();
    }
}