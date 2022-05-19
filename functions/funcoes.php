<?php

//Verificar o dia da Semana
//Extraido de :
//http://www.linhadecodigo.com.br/artigo/3565/trabalhando-com-funcoes-em-php.asp
//funções em minisculo
//chave do lado dos colchete
//get - retornar
//lista começa a contar pelo 0
//case - caso

function dia_atual (){
    $hoje = getdate();
    //return $hoje;
    //print_r ($hoje);

    echo "<br>";

    switch($hoje["wday"]){
        case 0:
            return "Domingo";
            break;
        case 1:
            return "Segunda";
            break;
        case 2:
            return "Terça";
            break;
        case 3:
            return "Quarta";
            break;
        case 4:
            return "Quinta";
            break;
        case 5:
            return "Sexta";
            break;
        case 6:
            return "Sábado";
            break;
    }
}
    //return $hoje;

    //reprimir conteudo array
    //print_r($hoje);

    //selecione caso - switch

?>

