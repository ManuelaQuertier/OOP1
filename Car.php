<?php

class Car{

    private string $color;

    private int $currentSpeed = 0;

    private int $nbSeats;

    private int $nbWheels = 4;

    private string $energy;

    private Int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this -> color = $color;
        $this -> nbSeats = $nbSeats;
        $this -> energy = $energy;
    }

    public function start(): string
    {
        $this -> currentSpeed;
        return "Start your engine.";

    }
    public function forward(): string
    {
        $this->currentSpeed = 30;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {

            $this->currentSpeed-=10;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this -> nbWheels;
    }
    public function setNbWheels(): int
    {
        $this-> nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): int
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this -> color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this -> nbSeats;
    }
    public function setNbSeats(): int
    {
        $this -> nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this -> energy;
    }
    public function setEnergy(): void
    {
        $this -> energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this -> energyLevel;
    }
    public function setEnergyLevel(): int
    {
        $this -> energyLevel = $energyLevel;
    }

}


