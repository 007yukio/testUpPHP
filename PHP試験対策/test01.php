<?php

echo("Hi!! PHPer".PHP_EOL);

$arr =["a","m","b"];

for($i=0; $i < count($arr); $i++){
    echo $arr[$i].PHP_EOL;
}

//大文字小文字区別しない
PRINT number_format(123456).PHP_EOL;
print number_format(123456).PHP_EOL;
$data = number_format(123456).PHP_EOL;
echo $data;


/* 
printf()関数

*/

$price = 5;
$off = 0.35;
printf ('Price : $%.1f', $price * (1 - $off));

echo"\n";

/*
strlen()
substr()
str_replace()
trim()
*/

print ucwords(strtoupper('sato ichiro')).PHP_EOL;
print ucwords(strtolower('SATO ICHIRO')).PHP_EOL;
print strtoupper(ucwords('sato ichiro')).PHP_EOL;
print strtolower(ucwords('SATO ICHIRO')).PHP_EOL;


$string = 'abcdefghijk';
print substr($string, 1,5).PHP_EOL;

print 1*8 . 3*4;
echo"\n";
echo "A:";
print 'Hello' == 'Hello'.PHP_EOL;
echo"\n";
echo "B:";
print 'Hello' == 'HELLO'.PHP_EOL;
echo"\n";
echo "C:";
print strcasecmp('Hello','Hello'.PHP_EOL);
echo"\n";
echo "D:";
print strcasecmp('Hello','HELLO'.PHP_EOL);
echo"\n";


$number = 0;

$number += 1;
$number += 2;
$number += 3;
$number += 4;
$number += 5;
++$number;

print 'number:'.$number;

echo "\n";

$data = false;

if($data){
    print "Hello";
    echo "\n";
}else{
    print "Bye";
    echo "\n";
}

$data1='10';

if($data1==10){
    print ("1".PHP_EOL);
}else{
    print ("2".PHP_EOL);
}

if(abs(-100)>abs(-50)){
    print("AAA".PHP_EOL);
}

if("abc" > "xyz"){
    print ("BBB".PHP_EOL);
}elseif("567" < "890"){
    print ("CCC".PHP_EOL);
}

if('5member' < 44){
    print("44".PHP_EOL);
}else{
    print ("".PHP_EOL);
}

if(strcmp("54321","6789") > 0){
    print ("Over".PHP_EOL);
}else{
    print ("Under".PHP_EOL);
}

//パースエラーになる
// $ans = 2 <=> 22.5

// if ($ans > 0)
//     print "Over";
// }else{
//     print "Under";
// }

$data = 80;
if(($data >= 70) || ($data > 100)){
    print ("Success".PHP_EOL);
}elseif(($data >= 30) && ($data < 70)){
    print ("Fail".PHP_EOL);
}

$i = 1;
$add = 0;
while(++$i < 10){
    $add += $i;
}

print ($add.PHP_EOL);

for($k = 0; $k <= 10; $k++){
    if($k % 3 == 0){
        print "3";
    }elseif($k % 4 == 0){
        print "4";
    }else{
        print "0";
    }
}

echo "\n";
