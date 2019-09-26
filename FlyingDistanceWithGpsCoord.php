<?php
/**
 * A simple class php to Calculate The flying distance between two points with GPS coordinates
 *
 * Get :: flying distance (Km) between two points with the latitude and longitude coordinates represented in decimal format.
 * 
 * Before used this class, below the prerequises 
 * 
 * PHP 5 or newer
 * @author Hassane Moussa <mhassane2012@gmail.com>
 * @From Africa / Niamey-Niger
 * @License GPL
 */
 
 class FlyingDistanceWithGpsCoord{  
	 
	 const EARTH_RADIUS = 6378;
	 
	public static function getEartRadius() {
        return  self::EARTH_RADIUS;
    }

	/**
    * Converting a number with comma as decimal point.
    */
	 public static function bestFormatNumber($number){
		 
		 return str_replace(',', '.', $number);
 
	 }
	 
	/**
    * Function get flying distance (Km)
    */
	
	public static function distancekilometer($depName, $depLat, $depLong, $arrivName,$arrivLat,$arrivLong) {
		
		$depLat = self::bestFormatNumber($depLat); 		// departure latitude coordinate
		$depLong = self::bestFormatNumber($depLong);  	// departure longitude coordinate
		$arrivLat = self::bestFormatNumber($arrivLat); 	// arrival latitude coordinate
		$arrivLong = self::bestFormatNumber($arrivLong);// arrival longitude coordinate
		
		$calculateFormula = SIN(deg2rad($depLat))*SIN(deg2rad($arrivLat))+COS(deg2rad($depLat))*COS(deg2rad($arrivLat))*COS(deg2rad($arrivLong-$depLong));
		
		$km = number_format(round(ACOS($calculateFormula) * self::getEartRadius(),0),0, ' ',' ');
		
		$showResult = "The flying distance between <b>$depName</b> and <b>$arrivName</b> is <b>".$km."</b>  km";
		
		return $showResult;

	}
	 	 
 } 