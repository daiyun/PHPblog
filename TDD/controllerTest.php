<?php
require_once('vendor/autoload.php');

define('HUANGDR','huangdr');
define('IN_APP', '../Blog/');
require_once(IN_APP.'Conf/DIR.config.php');
require_once(IN_APP.'Controller/controller.class.php');

class controllerTest extends PHPUnit_Framework_TestCase
{
	public $controller = NULL;
	public function setUp(){
		$this->controller = new controller();
	}
	public function tearDown(){
		unset($this->controller);
	}
	public function testCreate(){
		$this->assertNotEmpty($this->controller);
	}
	public function dataSetTpl(){
		return array(
			'not'=>array('','controller/setTpl.tpl'),
			'notexists'=>array('noexists.tpl','error/error.tpl'),
			'right'=>array('it/index.tpl','it/index.tpl')
			);
	}
	/**
	 * @dataProvider dataSetTpl
	 */
	public function testSetTpl($tpl,$result){
		$this->controller->setTpl($tpl);
		$this->assertEquals($result,$this->controller->tpl);
	}
}