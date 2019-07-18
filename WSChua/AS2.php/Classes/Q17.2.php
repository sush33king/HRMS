<?php
class Person {
	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName($name) {
		return $this->name;
	}
}

$robin = new Person();
$robin->setName('Robin');
$robin->getName('Robin');

?>
           