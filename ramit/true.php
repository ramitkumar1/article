<?php
$userIsNew = true; 
$userHasActiveSubscription = false; 

if ($userIsNew && !$userHasActiveSubscription) {
    echo "You are eligible for a trial period!";
} else {
    echo "Sorry, you are not eligible for a trial period.";
}
?>
