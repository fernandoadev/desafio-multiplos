<?php

include 'class/class.php';


$i = 1;

while ($i <= 100) {
    $numero = new IdentificaNumero($i);
    echo "<br>" . $numero->imprimir() . "<br>";
    $i++;
}
