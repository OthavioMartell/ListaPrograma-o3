<?php 

    function numero($n1, $n2){
        $resultado = 0;
        if($n1>$n2){
            print "O número $n1 é o maior!\n";
        }else{
            print "O número $n2 é o maior!\n";
        }
        return $resultado;
    }

    print "Digite o primeiro número: ";
        $n1 = (float) fgets(STDIN);

    print "Digite o segundo número: ";
        $n2 = (float) fgets(STDIN);
    
    $resultado = 0;
    numero($n1, $n2);
    
?>