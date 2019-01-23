<?php
/*Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.
*/
	$n = 20;

	for ($i=1; $i <= $n ; $i++) { 
		print $n;
		echo "<br />";
		if ($i == $n) {
			print $i*$n;
		}
	}
?>