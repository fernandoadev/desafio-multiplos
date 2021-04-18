<?php
include '../class/class.php';

//Rodar no terminal (php funcoesTest.php)
function test_multiplo_tres() {
    $result = new MultiploTres(3);
    if ($result->imprimir() == "BHUT" && $result->multiplo()) {
        echo "Sucesso";
        return;
    }
    echo "Erro";
    return;
}
test_multiplo_tres();

function test_multiplo_cinco() {
    $result = new MultiploCinco(5);
    if ($result->imprimir() == "IT" && $result->multiplo()) {
        echo "Sucesso";
        return;
    }
    echo "Erro";
    return;
}
test_multiplo_cinco();

function test_multiplo_tres_cinco() {
    $result = (new MultiploTres(15))->imprimir() . (new MultiploCinco(15))->imprimir();
    if (!empty($result)) {
        echo "Sucesso";
        return;
    }
    echo "Erro";
    return;
}
test_multiplo_tres_cinco();




