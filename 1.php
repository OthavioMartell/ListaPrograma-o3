<?php

    function fartoCel ($tf)
    {
        $tc = ($tf - 32) * 5/9;
        return $tc;
    }

    print "Digite um temperatura em Farenheit: ";
        $tf = (float) fgets(STDIN);
        $tc = fartoCel ($tf);
    
    print "Farenheit equivale a $tc Celsius";

?>