<?php
/*
PHP Lab Assignment Set B #2

Instructions:
Write a program to help you shop for the first TU football game. The
  program should read in the price of the football game ticket, your
  favorite Tiger Football T-shirt, and the money spent on refreshments.
  Calculate the subtotal, the tax amount (8.5% of the subtotal), and the
  final total. Display the subtotal, tax amount, and final total with $
  and labels (accurate to 2 decimal places).
*/

//Initialize TAX_AMOUNT constant
//I've created the tax percent as a constant as it is the only thing in the prgram that CANNOT change
const TAX_AMOUNT = 0.085;

//Read: $ticket_price, $football_tshirt price,$refreshment_spendage
print("Enter the price of the TU football game ticket: ");
$ticket_price = fgets(STDIN);

print("Enter the price of your favorite Tiger Football T-shirt: ");
$football_tshirt_price = fgets(STDIN);

print("Enter the total amount of money spent of refreshments: ");
$refreshment_spendage = fgets(STDIN);


//Compute: $subtotal, $tax_amount, $final_total
//the TAX_AMOUNT constant doesn't need a dolla sign in front of it as it is a constant
$subtotal = $ticket_price + $football_tshirt_price + $refreshment_spendage;
$tax_amount_total = $subtotal * TAX_AMOUNT;
$final_total = $subtotal + $tax_amount_total;


//Display: subtotal, tax amount, final total
//I added then newline chacter at the end of each sentence for neatness
print("The subtotal is: $$subtotal\n");
print("The tax amount total is: $$tax_amount_total\n");
print("The final amount is: $$final_total\n\n");
  
?>
