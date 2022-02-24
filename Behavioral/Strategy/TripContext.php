<?php

namespace Behavioral\Strategy;

class TripContext
{
    private TravelStrategy $travelStrategy;

    public function __construct(TravelStrategy $travelStrategy)
    {
        $this->travelStrategy = $travelStrategy;
    }

    /**
     * @param TravelStrategy $travelStrategy
     */
    public function setTravelStrategy(TravelStrategy $travelStrategy): void
    {
        $this->travelStrategy = $travelStrategy;
    }

    public function confirmTrip(): void
    {
        echo "Happy Trip From Strategy =>  {$this->travelStrategy->travel()}";
    }
}