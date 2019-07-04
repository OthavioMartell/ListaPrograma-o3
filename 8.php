<?php

    function semana($n){
        switch($n){
            case 1;
                print "O dia é domingo\n";
                break;
            case 2;
                print "O dia é segunda-feira\n";
                break;
            case 3;
                print "O dia é terça-feira\n";
                break;
            case 4;
                print "O dia é quarta-feira\n";
                break;
            case 5;
                print "O dia é quinta-feira\n";
                break;
            case 6;
                print "O dia é sexta-feira\n";
                break;
            case 7;
                print "O dia é sabado\n";
                break;
        }
    }



    print "Digite o número que represente um dia da semana: ";
        $n = (int) fgets(STDIN);
    
    if($n>=8){
        print "\nErro, use um número entre 1 e 7!\n";
        }

    semana($n);

?>