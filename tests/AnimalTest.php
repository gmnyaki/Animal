<?php

use src\animalProject;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
 
    public function testAnimalIsACafMean()
    {
        $cat = new Cat();
        $this->assertEquals("meow", $cat->makeSound());
    }
}
