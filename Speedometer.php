<?php

class Speedometer
{
  public const MILES_KM_CONVERSION = 1.60934;

  public static function convertMilesToKm(float $miles): ?float
  {
    return round($miles * self::MILES_KM_CONVERSION, 2);
  }

  public static function convertKmToMiles(float $km): ?float
  {
    return round($km / self::MILES_KM_CONVERSION, 2);
  }
}

echo Speedometer::convertMilesToKm(10.2) .'<br>';
echo Speedometer::convertKmToMiles(4);