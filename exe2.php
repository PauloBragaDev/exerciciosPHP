<?php
/*Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes
*/
	$n1 = 13;

	if($n1 % 10 == 0){
		echo "é divisivel por 10";
	}
	elseif ($n1 % 5 == 0) {
		echo "é divisivel por 5";
	}
	elseif ($n1 % 2 == 0) {
		echo "é divisivel por 2";
	} else {
		echo "Não é divisivel";
	}

?>