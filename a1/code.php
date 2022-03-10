<?php 

class Building {
	public $name;
	public $floors;
	public $address;

	public function __construct($name, $floors, $address){
		$this->name = $name;
		$this->floors = $floors;
		$this->address = $address;
	}
}

class Condominium extends Building{
		// Encapsulation - getter
	public function getName(){
		return $this->name;
	}

		// Encapsulation - setter
	public function setName($name){
		$this->name = $name;
	}

		// Floors - getter
	public function getFloors(){
		return $this->floors;
	}

		// Floors - setter
	public function setFloors($floors){
		$this->floors = $floors;
	}

		// Address - getter
	public function getAddress(){
		return $this->address;
	}

		// Address - setter
	public function setAddress($address){
		$this->address = $address;
	}
}

$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezion City, Philippines');

$condominium = new Condominium("Enzo Condo", 5, 'Buendia Avenue, Makati City, Philippines');