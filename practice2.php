<?php
function numberTwice($num){
    echo $num + $num;
}
echo numberTwice(5);

echo "\n";

function f($a, $b){
 //処理したい内容
    echo $a + $b;
 }
echo f(3,5);

echo "\n";

$arr = [1,3,5,7,9];
function arrayTimes($arr){
    $result = $arr[0];
    foreach($arr as $ar) {
        echo $result *= $ar;
    }
}

echo arrayTimes($arr);

echo "\n";

$arr= [10,3,90,4,100];
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($max_number >= $a){
     continue;
 }
 $max_number = $a;
 }
 return $max_number;
 }

 
 echo max_array($arr);
 
 echo "\n";
 
 
// strip_tags
$text = '<h1>The text.</h1><p>text example.</p><a href="#fragment">Other text.</a>';
echo strip_tags($text);
echo "\n";

// array_push
$array = array('meat','potato');
array_push($array,'carrot','onion');
print_r($array);
echo "\n";
// array_merge
$array1 = array('salt','sugar');
$result = array_merge($array,$array1);
print_r($result);
echo "\n";
// time, mktime
date_default_timezone_set('Asia/Tokyo');
echo date("M-d-Y", mktime(0, 0, 0, 10, 3, 20));
echo "\n";
// date
echo "October 3, 2020 is on a " . date("l", mktime(0, 0, 0, 10, 3, 2020));

 
 
 
 
 ?>














