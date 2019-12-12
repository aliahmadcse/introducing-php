<?php
// Convert $total_minutes to hours and minutes.

$total_minutes = 318;
$hours=intdiv($total_minutes,60);
$minutes = $total_minutes % 60;

echo "Time taken was $hours hours $minutes minutes";
