<?php
	include "classes/Tea.php";


	$item_ = new Tea('чай','чай черный в пакетиках',10,150,'test.img','Leaf tea','testpack');

	echo $item_->getName();
	echo '<br>';
	echo Tea::$pathBigPhotos;
	echo '<br>';
	echo $item_->getTeaType();
	echo '<br>';
	echo $item_->getPhotoName();


?>