<?php
	include 'Product.php';
	/**
	 * 
	 */
	class Tea extends Product
	{
		private $teaType;
		private $teaPack;

		function __construct($name,$decription,$quantity,$price,$photoName,$teaType,$teaPack)
		{
			parent::__construct($name,$decription,$quantity,$price,$photoName);
			$this->teaPack=$teaPack;
			$this->teaType=$teaType;
		}
		public function getTeaType(){
			return $this->teaType;
		}
		public function getTeaPack(){
			return $this->teaPack;
		}

	}
?>
