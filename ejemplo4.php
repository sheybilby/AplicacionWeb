<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4;
$n = 5;
if ($a == 1) { 
    print("a es igual a 1");
}elseif ($a == $b && $a == $c) {   
    if ($c == 2) { 
        print("c es igual a 2");
    }
} elseif ($a == $d) { 
    try {
        print("try");
    } catch (Exception $e) {  
        print("exception"); 
    }
} else { 
    switch($n) { 
      case 1: 
        print("1"); 
        break;
      case 2: 
        print("2"); 
        break;
      case 3: 
        print("3"); 
        break;
      default:
        print("default");  
        break;
    }
   
}
$e = $a > 0 ? 1 : -1;
