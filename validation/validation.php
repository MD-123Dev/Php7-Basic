
<?php

$a = 10;

//$b = true;

//$c = 12.25;

//$h = "";

//$d = "hello";

$array = [1,5,6,3,7,5,2];

if(is_int($a)){
    echo $a."varaible is interger";
}
else if(is_bool($b)){
    echo $b."is bollen ";
}
else if(is_float($c)){
    echo $c."is Float ";
}
else if(isset($h)){//*verifier h est vide 
    echo $h."is vide ";
}
else if(is_string($d)){
    echo $d."is String ";
}
else if(is_array($array)){
    echo "is Array ";
}
else{
    echo " no valide !!! ";
}
