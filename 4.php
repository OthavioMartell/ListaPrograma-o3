<?php

    function pesoideal ($sex, $h){
        if($sex=1){
            $pesoIdeal = (72.7 * $h) - 58;
        }else{
            $pesoIdeal = (62.1 * $h) - 44.7;
        }
        return $pesoIdeal;
    }

    print "Digite o número que corresponde ao seu sexo [1 = Masculino] [2 = Feminino]: ";
        $sex = (float) fgets(STDIN);

    print "Digite a sua altura: ";
        $h = (float) fgets(STDIN);

    $pesoIdeal = pesoideal ($sex, $h);

    pesoideal ($sex, $h);
    print "O seu peso ideal é: $pesoIdeal\n"

?>
