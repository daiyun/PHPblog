<?php
require_once('vendor/autoload.php');

define('HUANGDR','huangdr');
define('IN_APP', '../Blog/');
require_once(IN_APP.'Conf/DIR.config.php');
require_once(IN_APP.'Controller/it.class.php');

class itTest extends PHPUnit_Framework_TestCase
{
	public $controller = NULL;
	public function setUp(){
		$this->controller = new it();
	}
	public function tearDown(){
		unset($this->controller);
	}
	public function testCreate(){
		$this->assertNotEmpty($this->controller);
	}
	
	public function dataIndex(){
		return array(
			'ling'=>array(0,array(
				'nowPage'=>1,
				'data'=>array('title'=>'','modify_time'=>'','content'=>''),
				'title'=>'Huangdr',
				'articleCount'=>11,
				'controller'=>'it'
				)
			),
			'ok'=>array(1,array(
				'nowPage'=>1,
				'data'=>array('title'=>'','modify_time'=>'','content'=>''),
				'title'=>'Huangdr',
				'articleCount'=>11,
				'controller'=>'it')
			),
			'100'=>array(3,array(
				'nowPage'=>3,
				'data'=>array('title'=>'','modify_time'=>'','content'=>''),
				'title'=>'Huangdr',
				'articleCount'=>11,
				'controller'=>'it')
			)
			);
	}
	/**
	 * @dataProvider dataIndex
	 */
	public function Index($data,$result){
		$retuen_arr = $this->controller->index($data);
		$this->assertEquals('it/index.tpl',$this->controller->tpl);
		$this->assertEquals($result,$retuen_arr);
	}
	public function dataRead(){
		return array(
			'ok'=>array('15',array(
				'comments'=>array(),
				'date_id'=>'15',
				'title'=>'huang',
				'content'=>'dairong',
				'controller'=>'it')
				),
			'no'=>array('14',array(
				'comments'=>array(),
				'date_id'=>'14',
				'title'=>'',
				'content'=>'',
				'controller'=>'it')
				)
			);
	}
	/**
	 * @dataProvider dataRead
	 */
	public function testRead($data,$result){
		$article_content = $this->controller->read($data);
		$this->assertEquals('it/article.tpl',$this->controller->tpl);
		$this->assertEquals($result,$article_content);
	}
}