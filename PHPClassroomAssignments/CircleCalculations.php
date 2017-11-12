<?php

/*
 * Name: Kody Ellis
 * Description: This application will compute the area and circumfernece
 * 	when given the circle's radius.
*/

//Constant PI
const PI = 3.14159265359;

//read input
print ("What is the radius of the circle?");
$radiu = fgets(STDIN);
$radius = (int)$radiu;

/*calculate input
 * pow is power, using exponents.
 * number_format reduces the output numbers decimals to x number of decimals
 * Constants don't require a $ when being called
*/
$diameter = $radius * 2;
$circumference = 2 * PI * $radius;
$area = PI * pow($radius,2);

//format input
$radiusF = number_format($radius,2);
$areaF = number_format($area,2);
$circumferenceF = number_format($circumference,2);

print(gettype($radiusF));

//display input
// \n means "newline"
print ("\nRadius of circle: $radiusF\n");
print ("Diameter of circle: $diameter\n");
print ("Circumference of circle: $circumferenceF\n");
print ("Area of circle $areaF\n\n");
?>
