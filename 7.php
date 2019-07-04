<?php

    function mes($n){
        switch($n){
            case 1;
                print "O mês é janeiro";
                break;
            case 2;
                print "O mês é fevereiro";
                break;
            case 3;
                print "O mês é março";
                break;
            case 4;
                print "O mês é abril";
                break;
            case 5;
                print "O mês é maio";
                break;
            case 6;
                print "O mês é junho";
                break;
            case 7;
                print "O mês é julho";
                break;
            case 8;
                print "O mês é agosto";
                break;
            case 9;
                print "O mês é setembro";
                break;
            case 10;
                print "O mês é outubro";
                break;
            case 11;
                print "O mês é novembro";
                break;
            case 12;
                print "O mês é dezembro";
                break;
        }
    }



    print "Digite o número que represente o mês: ";
        $n = (int) fgets(STDIN);
    
    if($n>=13){
        print "\nErro, use um número entre 1 e 12!";
        }

    mes($n);

?>

    