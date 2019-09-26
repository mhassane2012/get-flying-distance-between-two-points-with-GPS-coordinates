<?php

require_once 'FlyingDistanceWithGpsCoord.php';

// flying distance (Km) between Niamey/Africa (lat:13.5137/long:2.1098) and Paris/France (lat:48.856697/long:2.351462)

echo FlyingDistanceWithGpsCoord :: distancekilometer("Niamey","13.5137","2.1098","Paris","48.856697","2.351462");

echo "<br/><br/>";

echo FlyingDistanceWithGpsCoord :: distancekilometer("Niamey","13,5137","2,1098","New York","40,712728","-74,006015");

?>