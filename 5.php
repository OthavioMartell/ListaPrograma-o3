<?php

    function lados($nl){
        if($nl==3){
            $forma = "triângulo";
        }elseif($nl==4){
            $forma = "quadrado";
        }elseif($nl==5){
            $forma = "pentágono";
        }
        return $forma;
    }
        
    function medida($nl, $med){
        if($nl==3){
            $medfinal = $med * 3;
        }elseif($nl==4){
            $medfinal = $med * $med;
        }elseif($nl==5){
            $medfinal = $med * 5;
        }
        return $medfinal;
    }

    print "Digite o número de lados do seu polígono: ";
        $nl = (int) fgets(STDIN);

    print "\nDigite a medida de um dos lados do seu polígono REGULAR: ";
        $med = (float) fgets(STDIN);

    $forma = lados($nl);
    $medfinal = medida($nl, $med);

    lados($nl);
    medida($nl, $med);
    if($nl==3){
        medida($nl, $med);
        lados($nl);
        print "\nO perímetro do seu triângulo é: $medfinal";
    }elseif($nl==4){
        medida($nl, $med);
        lados($nl);
        print "\nA área do seu quadrado é: $medfinal";
    }elseif($nl==5){
        medida($nl, $med);
        lados($nl);
        print "\nO perímetro do seu pentágono é: $medfinal";
    }

?>


    

