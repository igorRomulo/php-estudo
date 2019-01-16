<?php
	class Orcamento {

		private $valor;

		function __constructor( $novoValor ) {
			$this->valor = $novoValor;
		}

		public function getValor() {
			return $this-valor;
		} 
	}

	class CalculadoraDeImpostos {

		public function realizaCalculo( Orcamento $orcamento, Imposto $imposto ) {

			$valor = $imposto->calcula( $orcamento );

			echo $valor;
		}
	}

	class ICMS implements Imposto {

		public function calcula( Orcamento $orcamento ) {

			return  ( $orcamento->getValor() * 0.05 ) + 50;
		}
	} 

	class ISS implements Imposto {

		public function calcula( Orcamento $orcamento ) {
			
			return  $orcamento->getValor() * 0.06;
		}
	} 
?>