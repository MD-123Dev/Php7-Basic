<?php
function tp1(){
  
    $arry1 = [
    ["name"=>"ali","age"=>59,"tel"=>11554452],
     ["name"=>"ahemed","age"=>68,"tel"=>669558854],
];

 $z = 0;

foreach($arry1 as $arr){
    echo "name" .$arr['name'].$arr['tel'] ."</br>";
}

foreach($arry1 as $arr){
    $z += $arr['age']; 
}
echo "result:".$z;

}

tp1();



