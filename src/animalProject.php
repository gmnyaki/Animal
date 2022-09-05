<?php
namespace animals
// Interface definition
interface Animals {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
	private $species  = 'cat';

  	public function makeSound() {
    return " meow ";
  }

  public function setSpecies($species) {
  $this->species = $species;
}

public function getSpecies() {
  return $this->species;
}

}

class Dog implements Animal {
	private $species  = 'dog';
  	public function makeSound() {
    return " woof ";
  }
   public function setSpecies($species) {
  $this->species = $species;
}

public function getSpecies() {
  return $this->species;
}
}

class Cow implements Animal {
	private $species  = 'cow';
  	public function makeSound() {
    return "moo";
  }
   public function setSpecies($species) {
  $this->species = $species;
}

public function getSpecies() {
  return $this->species;
}
}

class Unicorn implements Animal {
	private $species  = 'unicorn';
  	public function makeSound() {
    return "Unicorns are too fabulous for labels and words.";
  }
   public function setSpecies($species) {
  $this->species = $species;
}

public function getSpecies() {
  return $this->species;
}
}


// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$cow = new Cow();
$unicorn = new Unicorn();

$animals = array($cat, $dog, $cow, $unicorn);

// Tell the animals to make a sound
echo "\n Enter animal name : ";
$handle  = fopen("php://stdin", "r"); //read user input
$name = fgets($handle);

echo "\n Enter animal type : ";
$type = fgets($handle);
 
foreach($animals as $animal) {
	if($animal->getSpecies() == trim($type) ){
		if(trim($type) == 'unicorn') {
			echo $animal->makeSound();
			return;
		}
		echo $name.' says '.$animal->makeSound();
	}
}
?>