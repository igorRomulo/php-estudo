<?php
	
	require 'orcamento.php';
	require 'imposto.php';
	require 'calculadora.php';
	require 'icc.php';

	$reforma     = new Orcamento( 500 );
	$novoImposto = new ICCC();
	echo $novoImposto->calcula( $reforma );
?>