<?php
$cedula = $_GET['cedula'];
$n1 = $_GET['profundizacion'];
$n2 = $_GET['matematica'];
$n3 = $_GET['dWeb'];
$n4 = $_GET['formacionEmpresarial'];
$n5 = $_GET['so'];
$n6 = $_GET['bd'];
$n7 = $_GET['inglesProyecto'];
$n8 = $_GET['inglesCavani'];
$n9 = $_GET['ada'];
$n10 = $_GET['filosofia'];
$n11 = $_GET['proyecto'];
$n12 = $_GET['sociologia'];
$n13 = $_GET['programacion'];


function promedio($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10, $n11, $n12, $n13){
    if(
        $n1 <= 12 && $n1 > 0 &&
        $n2 <= 12 && $n2 > 0 &&
        $n3 <= 12 && $n3 > 0 &&
        $n4 <= 12 && $n4 > 0 &&
        $n5 <= 12 && $n5 > 0 &&
        $n6 <= 12 && $n6 > 0 &&
        $n7 <= 12 && $n7 > 0 &&
        $n8 <= 12 && $n8 > 0 &&
        $n9 <= 12 && $n9 > 0 &&
        $n10 <= 12 && $n10 > 0 &&
        $n11 <= 12 && $n11 > 0 &&
        $n12 <= 12 && $n12 > 0 &&
        $n13 <= 12 && $n13 > 0
    ){
        $pancho2 = ($n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11 + $n12 + $n13) / 13;
        if ($pancho2 <= 3) {
            echo "Te vas a examen en febrero, ";
        } elseif ($pancho2 >= 4 && $pancho2 <= 7) {
            echo "Te vas a examen reglamentado, ";
        } else {
            echo "Exoneraste, ";
        }
        echo " tu promedio es: " . $pancho2 . "<br>";
    } else {
        echo "Ingrese correctamente las notas";
    }
}


function cedula($cedula){
    if($cedula <= 0){
        echo "No se acepta cedula 0 o cedula negativa";
    } else {
        $cedula_cadena = (string)$cedula;
        $longitud = strlen($cedula_cadena);
        $digitos = [];
        
        if ($longitud === 8) {
            for ($i = 0; $i < $longitud; $i++) {
                $digitos[] = intval($cedula_cadena[$i]);
            }
            
            $n8 = $digitos[7];
            
            $total = ($digitos[0] * 2) + ($digitos[1] * 9) + ($digitos[2] * 8) + ($digitos[3] * 7) + 
                     ($digitos[4] * 6) + ($digitos[5] * 3) + ($digitos[6] * 4);
            $redondeo = ceil($total / 10) * 10;
            $verificador = $redondeo - $total;
            
            if ($verificador == $n8) {
                echo $cedula;
            } else {
                echo "cédula no válida";
            }
        } else {
            echo "Ingrese 8 números";
        }
    }
}