<?php
$score = 95; 

if ($score < 60) {
    $grade = 'F';
} elseif ($score >= 60 && $score <= 70) {
    $grade = 'D';
} elseif ($score >= 71 && $score <= 80) {
    $grade = 'C';
} elseif ($score >= 81 && $score <= 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}

echo "Your grade is: " . $grade;
?>
