<?php 
require_once 'Vehicle.php';

class Truck extends Vehicle{
    private $capacity;
    private $charge = 0 ;
    protected $energy;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity=$capacity;
    }
    
    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }
    
    public function isFull(): string
    {
        if( $this->charge < $this->capacity){
            return 'in filling';
        }else{ 
            return 'full';

        }

    }

}
