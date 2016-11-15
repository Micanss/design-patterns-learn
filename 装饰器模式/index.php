<?php 
abstract class Conmponent {
	abstract public function operation();
}

/**
* juti
*/
class MyComponent extends Conmponent
{
	public function operation()
	{
		echo "这是正常的组件方法 <br>";
	}
}

abstract class Decorator extends Conmponent {
	protected $component;
	function __construct(Conmponent $component)
	{
		$this->component = $component;
	}

	public function operation()
	{
		$this->component->operation();
	}
}

/**
* jutizhuangshiqi
*/
class MyDecorator extends Decorator
{
	
	function __construct(Conmponent $component)
	{
		parent::__construct($component);
	}

	public function addMethod()
	{
		echo "这是装饰器添加的方法 <br>";
	}

	public function operation()
	{
		$this->addMethod();
		parent::operation();
	}
}

$component = new MyComponent();
$da = new MyDecorator($component);
$da->operation();