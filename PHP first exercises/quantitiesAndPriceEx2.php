<?php 

Echo '<h4>There are two deals of an item to buy. The quantities and prices of the item are given below. 
Write a program in PHP to find the best deal to purchase the item. <h4>';

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;
$bestDeal =0;

Echo 'quantity1 = 70 <br> quantity2 = 100 <br> price1 = 35 <br> price2 = 30 <br><br>';

 if ($price1* $quantity1 < $price2*$quantity2){
    $bestDeal ="Best Deal is Price 1 which is $price1 with the quantity of $quantity1";
 }else{
    $bestDeal = "Best Deal is Price 2 which is $price2 with the quantity of $quantity2";
 }
 echo $bestDeal;
?>