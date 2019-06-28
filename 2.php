<?php

    function hipo ($c1, $c2){
        $c1+$c2 = $result;
        $final = sqrt($result);

        return $final;
    }
    
    print "Digite o número do primeiro cateto: ";
        $c1 = (float) fgets(STDIN);
        $c1 = $c1 * $c1;

    print "Digite o número do segundo cateto: ";
        $c2 = (float) fgets(STDIN);
        $c2 = $c2 * $c2;

    hipo ($c1, $c2);

    print "O resultado da hipotenusa é : $final";

?>

    