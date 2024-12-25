<?php 

// variable declare 

$name = true;
$first_name = "Jual";
$last_name = "Rana";
$birth_day = "22 November";
$professionalty = 'developer';
$have_laptop = true;
$price = 100000;
$laptop_brand = 'hp';


echo 'Hi, I am '.$first_name.' '.$last_name.'. My birthday is '.$birth_day.'. I am a professional '.$professionalty.'. My laptop brand is '.$laptop_brand.' and price '.$price.' TK. ';

// or

echo "Hi, I am ".$first_name." ".$last_name.". My birthday is ".$birth_day.". I am a professional ".$professionalty.". My laptop brand is ".$laptop_brand." and price ".$price."TK. ";

// or 

echo "Hi, I am $first_name $last_name. My birthday is $birth_day. I am a professsional $professionalty. My laptop brand is $laptop_brand and price $price TK. "; // best practice only for variables not constant
                                        




// if use $$ sign

$my_first_name = "Jual";
$naming = "my_first_name";

echo $$naming; // $$naming = $my_first_name = Jual




// comment------------------------------

// this is single line comment
# this is also single line comment
/* this is multy line comment */

?>