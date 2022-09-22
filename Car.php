<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public const ALLOWED_ENERGIES = [
      'fuel',
      'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function start()
    {
        echo 'VROOM !' . PHP_EOL;
        try {
            if ($this->hasParkBrake) {
                throw new Exception('Attention au frein à main !');
            }
            echo "C'est parti !" . PHP_EOL;
        } catch (Exception $e) {
            echo 'Exception reçue : ' . $e->getMessage() . PHP_EOL;
            $this->setParkBrake(false);
        } finally {
            echo 'Ma voiture roule comme un donut.' . PHP_EOL;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): bool
    {
        return $this->hasParkBrake = $hasParkBrake;
    }

    public function switchOn(): bool 
    {
        return true;
    }

    public function switchOff(): bool 
    {
        return false;
    }
}