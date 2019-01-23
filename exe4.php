<?php
/*Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
*/
	$numero = array(20, 30, 25);
	sort($numero);
	foreach ($numero as $key => $value) {
		echo "Numeros [". $key. "] = ".$value."\n";
	}

?>