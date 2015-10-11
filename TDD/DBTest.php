<?php
define('HUANGDR','huangdr');
define('IN_APP', '../Blog/');

require_once('vendor/autoload.php');
require_once(IN_APP.'Conf/DIR.config.php');
require_once(LIB_DIR.'DB/DB.php');

class DBTest extends PHPUnit_Framework_TestCase
{
	public $controller = NULL;
	public function setUp(){
		$this->controller = new DB();
	}
	public function tearDown(){
		unset($this->controller);
	}
	public function testCreate(){
		$this->assertNotEmpty($this->controller);
		$this->assertEquals(12,$this->controller->tableCount());
	}
}