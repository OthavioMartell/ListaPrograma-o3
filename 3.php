<?php

    function media ($n1, $n2){
        $soma = $n1 + $n2;
        $media = $soma / 2;

    return $media;
    }


    print "Digite a sua primeira nota: ";
        $n1 = (float) fgets(STDIN);

    print "Digite a sua segunda nota: ";
        $n2 = (float) fgets(STDIN);

    
    $media = media ($n1,$n2);
    
    
    media ($n1, $n2);
        if($media>=6){
            print "Parabéns você foi aprovado com a média: $media!";
        }else{
            print "Parabéns você reprovou com a média: $media!";
        }

?>

    