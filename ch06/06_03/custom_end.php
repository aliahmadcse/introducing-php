<?php

echo lyn_convertToMinutes(605);

function lyn_convertToMinutes($seconds)
{
    $sec = $seconds % 60;
    $min = intdiv($seconds, 60);
    $sec = abs($sec);
    $sec = ($sec < 10) ? '0' . $sec : $sec;
    return "$min:$sec";
}
