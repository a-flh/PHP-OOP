<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
  private string $energy;
  private int $energyLevel;
  private int $storageCapacity;
  private int $load = 0;

  public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
  ];

  public function __construct(string $color, int $nbSeats, string $energy, string $storageCapacity)
  {
      parent::__construct($color, $nbSeats);
      $this->energy = $energy;
      $this->storageCapacity = $storageCapacity;
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

  public function getStorageCapacity(): int
  {
      return $this->storageCapacity;
  }

  public function setStorageCapacity(int $storageCapacity): void
  {
      $this->storageCapacity = $storageCapacity;
  }

  public function getLoad(): int
  {
      return $this->load;
  }

  public function setLoad(int $load): void
  {
      $this->load = $load;
  }

  public function isFull(int $storageCapacity, int $load): string
  {
    if ($this->storageCapacity === $this->load) {
        return 'Full';
    } elseif ($this->load > $this->storageCapacity) {
        return 'It\'s too much !';
    } else {
        return 'In filling';
    }
  }
}