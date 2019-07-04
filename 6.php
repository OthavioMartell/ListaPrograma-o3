<?php

    function soma($n1, $n2){
        $soma = 0;
        for($n=$n1 ; $n<=$n2 ; $n++){
            $soma+=$n;
        }
        return $soma;
    }

    print "Digite o primeiro número (inteiro): ";
        $n1 = (float) fgets(STDIN);

    print "\nDigite o segundo número (inteiro): ";
        $n2 = (float) fgets(STDIN);

    $soma = soma($n1,$n2);

    print "\nA soma dos números no intervalo é: $soma";

?>

    

