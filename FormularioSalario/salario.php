<?php

$salario = $_GET["salario"];

if ($salario <= 2000.00) {
    $imposto = 0;
    echo "Isento de imposto<br>";
} else if ($salario >= 2000.00 && $salario <= 2700.00) {
    $imposto = 10;
} else if ($salario >= 2700.00 && $salario <= 3900.00) {
    $imposto = 15;
} else if ($salario >= 3900.00 && $salario <= 5500.00) {
    $imposto = 22;
} else if ($salario >= 5500.00) {
    $imposto = 27.5;
}
$valorPagar = ($salario / 100) * $imposto;
$salarioLiquido = $salario - $valorPagar;

echo "Valor do imposto a pagar: R\$ $valorPagar<br>";
echo "Salário Líquido: R\$ $salarioLiquido";
?>