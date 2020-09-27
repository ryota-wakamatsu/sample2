<?php
$name = "ryota";
if ($name = "ryota") {
    echo "私は あなたの名前 です";
}  else {
    echo "あなたの名前ではありません";
}
echo "\n";
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total +=$i;
}
echo $total;
echo "\n";
$fruits = ["avocado","kiwi","pear","pineapple","tangerine"];
foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}
echo "\n";
/**
 * for文の始めの値を定義する 
 */

/* for文の終わりの値を定義する */

for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>