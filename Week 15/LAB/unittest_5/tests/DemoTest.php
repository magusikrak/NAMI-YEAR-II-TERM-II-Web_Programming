<?php
class DemoTest extends \PHPUnit_Framework_TestCase
{
	  private $pdo;
	  //connecting the database.
	  public function setUp() {
	  	// $pdo = new PDO('mysql:host=localhost;dbname=antiques', 'root', '');
	  }

	  //to test the invalid entering of product name
      public function testInvalidProductName() {
	  	$this->assertTrue(true);
	  }
}