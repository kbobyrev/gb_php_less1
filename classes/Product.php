<?php
		class Product
		{
			static $pathBigPhotos='any_big_path';
			static $pathSmallPhoto='any_small_path';


			private $name;
			private $description;
			private $quantity;
			private $price;
			private $photoName;


			function __construct($name,$decription,$quantity,$price,$photoName)
			{
				$this->name = $name;
				$this->description = $description;
				$this->quantity=$quantity;
				$this->photoName=$photoName;

			}
			public function getName(){
				return $this->name;
			}
			public function getDescription(){
				return $this->description;
			}
			public function getQuantity(){
				return $this->quantity;
			}
			public function getPrice(){
				return $this->price;
			}
			public function getPhotoName(){
				return $this->photoName;
			}
			public function getFullBigPhotoName(){
				if ($pathBigPhotos!=''){
					return $pathBigPhotos.$photoName;
				}
				{
					die("The photo path doesn't exist");
				}
			}
			public function getFullSmallPhotoName(){
				if($pathSmallPhoto!=''){
					return $pathSmallPhoto.$photoName;
				}
				{
					die("The photo path doesn't exist");
				}
			}
			public function setNewPrice($newPrice){
				$this->price = $newPrice;
				return true;
			}
			public function setNewQuantity($newQuantity){
				$this->quantity=$newQuantity;
				return true;
			}
			
		}

?>