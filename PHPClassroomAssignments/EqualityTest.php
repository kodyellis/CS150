<?php

/*This program gets your input for two variables, a and b.
* It then test if those two varuables are equal. If so, it
* will state it. If not, it will also state it.
*/

// gets input
print ("Enter value for a: ");
$a = trim(fgets(STDIN));
print ("Enter y value for b: ");
$b = trim(fgets(STDIN));

print("before\n");
print ("value a = $a and value b = $b\n");

//calculates 
if ( $a == $b)
   print ("Values are equal \n");
else
   print ("Values are not equal \n");

//display output
print("after\n");
print("value a = $a and value b = $b\n");

?>
