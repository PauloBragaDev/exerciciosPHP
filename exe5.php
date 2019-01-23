<?php
/*Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados
*/
	$n1 = 20;
	$n2 = 10;
	$n3 = 10;

	if(($n1 == $n2) && ($n3 == $n1)){
		echo "EQUILATERO";
	}
	elseif (($n1 == $n2) || ($n1 == $n3) || ($n2 == $n3)) {
		echo "ISOCELES";
	}
	else{
		echo "ESCALENO";
	}
?>