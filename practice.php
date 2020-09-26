<?php
echo 'hello php!';
echo "\n";
$a = 3;
$b = 7;
echo $a * $b;
echo "\n";
$array_month = ["１月","２月","３月","４月","５月","６月","７月","８月","９月","１０月","１１月","１２月"];
echo $array_month[7];
echo "\n";
$hello='Hello,';
$name='Ryota';
$world="'s world!";
echo $hello . $name . $world;
echo "\n";
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";
$calender = [
     
  "January" => "１月",
  "February" => "２月",
  /**
   * 、を,に変更
   */
   
  "March" => "３月",
  "April" => "４月",
  "May" => "５月",
  "June" => "６月",
  "July" => "７月",
  "August" => "８月",
  "September" => "９月",
  "October" => "１０月",
  "November" => "１１月",
  "December" => "１２月"
];

// 12月を表示する
echo $calender["December"];
/**
 * Decemberを11に変更
 */
 
?>

