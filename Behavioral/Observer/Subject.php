<?php

namespace Behavioral\Observer ;

use SplSubject ;
use SplObserver ;
use SplObjectStorage ;

class Subject implements SplSubject
{
    /**
     * @var int For the sake of simplicity, the Subject's state, essential to
     * all subscribers, is stored in this variable.
     */
    public $state;

    /**
     * @var SplObjectStorage List of subscribers. In real life, the list of
     * subscribers can be stored more comprehensively (categorized by event
     * type, etc.).
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }


    public function attach(SplObserver $observer)
    {
        echo "Subject: Attached an observer .<br>";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.<br>";
    }


    public function notify()
    {
        echo "Subject: Notifying observers...<br>";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /*
    * Usually, the subscription logic is only a fraction of what a Subject can
    * really do. Subjects commonly hold some important business logic, that
    * triggers a notification method whenever something important is about to
    * happen (or after it).
    */
    public function someBusinessLogic(): void
    {
        echo "Subject: I'm doing something important.<br>";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}<br>";
        $this->notify();
    }
}