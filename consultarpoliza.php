<?php
$edad = $_POST['edad'];
$genero = $_POST['genero'];
if (!empty($edad)) {
    if (is_numeric($edad)) {
        if ($edad >= 0) {
            if (ctype_digit($edad)) {
                if ($edad <= 17) {
                    print("La edad del cotizante debe ser mayor o igual a 18 años");
                }else{
                    if ($edad >= 18 && $edad <= 24) {
                        if ($genero == "masculino") {
                            $prima = 2000;
                        } else {
                            $prima = 500;
                        }
                    }
                    if ($edad >= 25 && $edad <= 64) {
                        if ($genero == "masculino") {
                            $prima = 1000;
                        } else {
                            $prima = 500;
                        }
                    }
                    if ($edad >= 65) {
                        $prima = 1500;
                    }
                    print("El valor de la prima anual de seguro de auto según su género y edad es: ".$prima." dólares");
                }
            } else {
                print("Debe ingresar valores numéricos enteros en el campo edad");
            }
        } else {
            print("La edad no puede ser un valor negativo");
        }
    } else {
        print("Debe ingresar valores numéricos en el campo edad");
    }
} else {
    print("Debe ingresar su edad para poder realizar la cotización");
}

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

