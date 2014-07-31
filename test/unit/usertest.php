<?php
class UserTest extends PHPUnit_Framework_TestCase {

	/**
	* @cover User::getPrenom()
	*/
	public function testGetPrenom() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$this->assertEquals('Jack', $user->getPrenom());
	}

	/**
	* @cover User::getNom()
	*/
	public function testGetNom() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$this->assertEquals('Chirac', $user->getNom());
	}

	/**
	* @cover User::getAge()
	*/
	public function testGetAge() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$this->assertEquals('81', $user->getAge());
	}

	/**
	* @cover User::setPrenom()
	*/
	public function testSetPrenom() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$user->setPrenom('test');
		$this->assertEquals('test', $user->getPrenom());
	}

	/**
	* @cover User::setNom()
	*/
	public function testSetNom() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$user->setNom('test');
		$this->assertEquals('test', $user->getNom());
	}

	/**
	* @cover User::setAge()
	*/
	public function testSetAge() {
		$user = new Entity\User('Chirac', 'Jack', 81);
		$user->setAge('28');
		$this->assertEquals('28', $user->getAge());
	}
}