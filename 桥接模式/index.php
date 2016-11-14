<?php 
abstract class Abstraction{
	protected $myImp;
	abstract public function operation();
}

abstract class Implementor{
	abstract function operationImp();
}

/**
* jitushixianlei
*/
class MyImplementorA extends Implementor
{
	public function operationImp()
	{
		echo "A 实现类中的方法 <br>";
	}
}

class MyImplementorB extends Implementor
{
	public function operationImp()
	{
		echo "B 实现类中的方法 <br>";
	}
}

/**
* kuozhan
*/
class RefinedAbstraction extends Abstraction
{
	
	function __construct(Implementor $imp)
	{
		$this->myImp = $imp;
	}

	public function operation()
	{
		$this->beforeOperation();
		$this->myImp->operationImp();
		$this->afterOperation();
	}

	public function beforeOperation()
	{
		echo "在方法执行之前做一些前置操作 <br>";
	}
	public function afterOperation()
	{
		echo "在方法执行之后收尾操作 <br>";
	}
}

$imp = new MyImplementorA();
$pa = new RefinedAbstraction($imp);
$pa->operation();

$pb = new RefinedAbstraction(new MyImplementorB());
$pb->operation();