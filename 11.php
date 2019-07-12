<?php

    function pol($n){
        $cm = 0;
        $cm = $n * 2.54;
        return $cm;
    }

    print "Digite um número em polegadas: ";
        $n = (float) fgets(STDIN);

    pol($n);
    $cm = pol($n);
    print "O número de polegadas em centímetros é: $cm\n";

?>