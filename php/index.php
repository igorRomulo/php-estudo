<?php

	class ShopProduct {

		const AVAILABLE    = 0;
		const OUT_OF_STOCK = 1;
		
		private $title;
		private $producerMainName;
		private $producerFirstName;
		private $price;
		private $discount = 0;

		public function __construct( $title, $firstName, $mainName, $price ) {
			
			$this->title 			 = $title;
			$this->producerFirstName = $firstName;//var_dump( $teste );
			$this->producerMainName  = $mainName;
			$this->price = $price;
		}

		public function getProducerFirstName() {
			
			return $this->producerFirstName;
		}

		public function getProducerMaintName() {

			return $this->producerMainName;
		}

		public function setDiscount( $num ) {
			
			$this->discount = $num;
		}

		public function getTitle() {
			
			return $this->title;
		}

		public function getPrice() {
			
			return $this->price;
		}

		public function getProducer() {
			
			return $this->producerFirstName . " " . $this->producerMainName;
		}

		public function getSummaryLine() {
			
			$base  = $this->title . $this->producerMainName;
			$base .= $this->producerFirstName;
			return $base;
		}		
	}

	class CdProduct extends ShopProduct {
		
		private $playLength = 0;

		public function __construct( $title, $firstName, $mainName, $price, $playLength ) {

			parent::__construct( $title, $firstName, $mainName, $price );

			$this->playLength = $playLength;
		}

		public function getPlayLength() {
			
			return $this->playLength;
		}

		public function getSummaryLine() {
			
			$base  = parent::getSummaryLine();
			$base .= ": playing time -" . $this->playLength;
			return $base;
		}		
	}

	class BookProduct extends ShopProduct {
		
		private $numPages = 0;

		public function __construct( $title, $firstName, $mainName, $price, $numPages ) {
		
			parent::__construct( $title, $firstName, $mainName, $price );

			$this->numPages = $numPages;
		}

		public function getNumberOfPages() {

			return $this->numPages;
		}

		public function getSummaryLine() {
			
			$base  = parent::getSummaryLine();
			$base .= ": page count -" . $this->numPages;
			return $base;
		}	

		public function getPrice() {
			return $this->price;
		}
	}

	$teste = new CdProduct( "Exile on Coldharbour", "The", "Alabama 3", 10.99, 60.33 );

	echo "<br/>" . ShopProduct::AVAILABLE . "<br/>";
	//var_dump( $teste );

	echo 	"Cd Product : " . $teste->getTitle() . " " . $teste->getProducer() . ", Price Product R$ " 
			. $teste->getPrice() . ", Time all songs: " . $teste->getplayLength();