<?php
$articleTitle = "This is a very long article title that exceeds the character limit of 50";

if (strlen($articleTitle) > 50) {
    $truncatedTitle = substr($articleTitle, 0, 50) . "...";
} else {
    $truncatedTitle = $articleTitle;
}

echo $truncatedTitle;
?>
