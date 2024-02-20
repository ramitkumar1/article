<?php
$totalprice=5000;
if($totalprice>5000)
{
$discountedprice=$totalprice-($totalprice*0.1);
echo"congratulations;
your discount price is Rs. " .
$discountedprice;
}else{
echo"your total price is Rs. " .$totalprice;
}
?>