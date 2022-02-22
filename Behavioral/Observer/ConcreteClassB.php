<?php

namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

class ConcreteClassB implements SplObserver
{

    private $concreteState ;

    public function update(SplSubject $subject)
    {
        if ($subject->state == 0 || $subject->state >= 6) {
            echo "ConcreteObserverB: Reacted to the event.<br>";
        }

        $this->setConcreteState($subject->state);
        echo "The Concrete State Is => {$this->getConcreteState()} <br>";
    }

    /**
     * @return mixed
     */
    public function getConcreteState()
    {
        return $this->concreteState;
    }

    /**
     * @param mixed $concreteState
     */
    public function setConcreteState($concreteState): void
    {
        $this->concreteState = $concreteState;
    }
}