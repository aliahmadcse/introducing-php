<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

$heredoc = <<< EOT
In "$title" by $author, $android the "paranoid android" complains
that he's to do menial tasks, even though he has got a brain of 
"$brain_size"
EOT; 

echo $heredoc;
