<?php
/*Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
*/
	$nome = "Paulo";
	$sexo = "F";
	$idade= "23";

	if ($sexo == "F" && ($idade < 25)) {
		echo $nome." ACEITO";
	} else {
		echo "Não aceito";
	}

?>