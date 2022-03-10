<?php 

class Building {
	protected $name;
	protected $floors;
	protected $address;

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

}

$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezion City, Philippines');

$condominium = new Condominium("Enzo Condo", 5, 'Buendia Avenue, Makati City, Philippines');