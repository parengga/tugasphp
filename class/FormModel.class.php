<?php 

class FormModel {


	public function random(){

	$array = array("Komedi", "Romansa", "Horror", "Drama", "Sci-Fi", "Pengetahuan");

	return $array[array_rand($array, 1)];
	}

}
