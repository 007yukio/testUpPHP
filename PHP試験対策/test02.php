<?php

$numbers = array(10,20,30);
$numbers[] = 40;
$numbers[] = 50;
print ($numbers[4].PHP_EOL);

$colors['sea']   = 'blue';
$colors['leaf']  = 'green';
$colors['night'] = 'black';
print_r($colors['sea'].PHP_EOL);
print_r($colors['leaf'].PHP_EOL);
print_r($colors['night'].PHP_EOL);

$colors = array(
    '国語'=>80,
    '数学'=>90,
    '英語'=>75
);
print_r($colors.PHP_EOL);

echo ("============================".PHP_EOL);

$colors[0]='red';
$colors[1]='yellow';
$colors[3]='orange';
$colors[2]='blue';

foreach($colors as $color){
    print ("$color".PHP_EOL);
}

echo "============================".PHP_EOL;

$colorss['sea']   = 'blue';
$colorss['leaf']  ='green';
$colorss['night'] ='black';
$colorss['sun']   ='red';

asort($colorss);
foreach($colorss as $key => $value){
    print "$key \t : $value\n";
}
