<?php

namespace Behavioral\Strategy;

class TripContext
{
    private TravelStrategy $travelStrategy; // property to refer to strategy

    public function __construct(TravelStrategy $travelStrategy)
    {
        $this->travelStrategy = $travelStrategy;
    }

    /**
     * @param TravelStrategy $travelStrategy
     * change the strategy in run time
     */
    public function setTravelStrategy(TravelStrategy $travelStrategy): void
    {
        $this->travelStrategy = $travelStrategy;
    }

    // other business logic
    public function confirmTrip(): void
    {
        echo "Happy Trip From Strategy =>  {$this->travelStrategy->travel()}";
    }


    public function payTripAmount(): string
    {
        return "Trip Paid" ;
    }
}