<?php
class Item{
    public string $name;
    public int  $price;
}

$ItemValue = new Item();
$ItemValue->name = 'PHPオブジェクト動作確認の本';
$ItemValue->price= 1500;

echo $ItemValue->name,'/',$ItemValue->price;

