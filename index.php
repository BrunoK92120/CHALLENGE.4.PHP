<?php
$books = [
    'lile aux trésor'=> '1983',
    'enlevé'=> '1986',
    'jardins des poemes enfantins'=> '1985',
];
echo $books['lile aux trésor'];
echo $books['enlevé'];
echo $books['jardins des poemes enfantins'];
asort($books);
foreach($books as $titleBook => $date)
{
    echo " > $date - $titleBook";
}







