<?php
$score = 85; 

if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Based on the score of " . $score . ", the student's grade is " . $grade . ".";
?>
