<?php

/* 
PHP Lab Assignment Set B #1

Instructions:
Write a program to help solve the following equation in
 Math 107: y = 3xx-7x - 8. The program should read in a float (decimal) value
 for x, then compute and display the corresponding y (accurate to 3 decimal places).
*/


//Prompt and Get input for x variable
//Prompts user for x variable input
print("Please enter a decimal value for X: ");
$variable_x = fgets(STDIN);

//Computes math exression and y variable
//number_format makes limits y to only three decimal places
$math_expression = $variable_x*$variable_x*3 - 7*$variable_x - 8;
$variable_y = number_format($math_expression,3);

//Display value for y variable
//Displays the value stored in the y variable
//I added then newline chacter at the sentence for neatness
print("\nThe value for Y is: $variable_y\n");


?>
