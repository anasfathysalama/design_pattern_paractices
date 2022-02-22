<?php

namespace Behavioral\Observer ;

use SplObserver ;
use SplSubject ;

class ConcreteClassA implements SplObserver
{

    private $concreteState ;

    public function update(SplSubject $subject)
    {
        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.<br>";
        }
        $this->setConcreteState($subject->state);
        echo "The Concrete State Is => {$this->getConcreteState()} <br>";
    }

    /**
     * @param mixed $concreteState
     */
    public function setConcreteState($concreteState): void
    {
        $this->concreteState = $concreteState;
    }

    /**
     * @return mixed
     */
    public function getConcreteState()
    {
        return $this->concreteState;
    }
}