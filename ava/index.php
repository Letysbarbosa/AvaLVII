<?php
include 'Fatura.php';

$fatura1 = new Fatura();
$fatura1->setNumero("001");
$fatura1->setDescricao("Teclado USB");
$fatura1->setQtd(3);
$fatura1->setValoritem(26);

echo $fatura1->toString() . "<br>";

include 'Empregado.php';

$empregado1 = new Empregado();
$empregado1->setNome("Maria");
$empregado1->setSobrenome("Souza");
$empregado1->setSalariomensal(1500);

$empregado2 = new Empregado();
$empregado2->setNome("Joana");
$empregado2->setSobrenome("Silva");
$empregado2->setSalariomensal(1800);

echo "Salário anual do empregado 1: R$ " . $empregado1->salarioAnual() . "<br>";
echo "Salário anual do empregado 2: R$ " . $empregado2->salarioAnual() . "<br>";

$empregado1->aumentarSalario(10);
$empregado2->aumentarSalario(10);

echo "Salário anual do empregado 1 após aumento: R$ " . $empregado1->salarioAnual() . "<br>";
echo "Salário anual do empregado 2 após aumento: R$ " . $empregado2->salarioAnual() . "<br>";

?>