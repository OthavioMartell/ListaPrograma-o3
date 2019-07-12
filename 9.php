<?php

    function divi($x, $y){
        $media = 0;
        if($x%$y==0){
            $val = round(($x/$y),2);
            print "$x é divisível por $y, o resultado em questão é: $val\n";
        }else{
            $val = round(($x/$y),2);
            print "$x não é dividido por $y, o resultado em questão é: $val\n";
        }
        return $media;
    }

    print "Digite o número equivalente a X: ";
        $x = (float) fgets(STDIN);

    print "Digite o número equivalente a Y: ";
        $y = (float) fgets(STDIN);

    divi($x, $y);
    $media = 0;
    print $media;

?>