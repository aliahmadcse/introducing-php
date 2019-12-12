<?php
$name = 'Arthur Dent';

switch ($name) {
    case 'Arthur Dent':
        echo 'I could never get the hang of Thursdays.';
        break;
    case 'Marvin':
    case 'Paranoid Android':
    case 'robot':
        echo "I've got this terrible pain in all the diodes down my left-hand side.";
        break;
    default:
        echo 'Is that really a piece of fairy cake?';
}

switch ($name) {
    case 'Arthur Dent':
        echo "Arther";
        break;
    case "Ali":
        echo "Ali";
        break;
    default:
        echo "Default";
}
