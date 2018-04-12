<?php


		
		function validar($valor1, $valor2){
	return is_numeric($valor1) &&  is_numeric($valor2);
	}
		
		function Soma($valor1, $valor2){
	return $valor1 + $valor2;
	}

		function Dividir($valor1, $valor2){
	return $valor2 !=0 ? $valor1 / $valor2: "divisão por zero";
	}
		
		function Subtrair($valor1, $valor2){
	return $valor1 - $valor2;
	}
	
	function Multiplicar($valor1, $valor2){
	return $valor1 * $valor2;
	}
		
		
	echo $Resultado;
	
?>