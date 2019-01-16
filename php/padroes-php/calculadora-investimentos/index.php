<?php
	
	require 'conta.php';
	require 'investimentos.php';
	require 'realizadordeinvestimentos.php';
	require 'conservador.php';
	require 'moderado.php';
	require 'arrojado.php';

	$conta 			  				= new Conta();
	$contaSaldo       				= $conta->deposita( 2000 );
	$contaInvestModer               = new Moderado();
	$contaInvestModerCalcular       = $contaInvestModer->calcula( $conta );
	$cantaRealizadorDeInvestimentos = new RealizadorDeInvestimentos();
	$cantaRealizadorDeInvestimentosPagamento = $cantaRealizadorDeInvestimentos->realiza( $conta, $contaInvestModer );


	var_dump( $cantaRealizadorDeInvestimentos->realiza( $conta, $contaInvestModer ) );
?>