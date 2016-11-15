<?php 
interface DrawingAPI{
	public function drawCircle($x,$y,$radius);
}

/**
* dreaAPI
*/
class DrawingAPI1 implements DrawingAPI
{
	public function drawCircle($x,$y,$radius)
	{
		echo "API1.circle at (".$x.','.$y.') radius '.$radius.'<br>';
	}
}
class DrawingAPI2 implements DrawingAPI
{
	public function drawCircle($x,$y,$radius)
	{
		echo "API2.circle at (".$x.','.$y.') radius '.$radius.'<br>';
	}
}

interface Shape{
	public function draw();
	public function resize($radius);
}

/**
* fdq
*/
class CircleShape implements Shape
{
	private $x;
	private $y;
	private $radius;
	private $drawingAPI;
	function __construct($x,$y,$radius,DrawingAPI $drawingAPI)
	{
		$this->x = $x;
		$this->y = $y;
		$this->radius = $radius;
		$this->drawingAPI = $drawingAPI;
	}

	public function draw()
	{
		$this->drawingAPI->drawCircle($this->x,$this->y,$this->radius);
	}

	public function resize($radius)
	{
		$this->radius = $radius;
	}
}

$shape1 = new CircleShape(1,2,4,new DrawingAPI1());
$shape2 = new CircleShape(1,2,4,new DrawingAPI2());
$shape1->draw();
$shape2->draw();
$shape1->resize(10);
$shape1->draw();
// /**
// * jitushixianlei
// */
// class MyImplementorA extends Implementor
// {
// 	public function operationImp()
// 	{
// 		echo "A 实现类中的方法 <br>";
// 	}
// }

// class MyImplementorB extends Implementor
// {
// 	public function operationImp()
// 	{
// 		echo "B 实现类中的方法 <br>";
// 	}
// }

// /**
// * kuozhan
// */
// class RefinedAbstraction extends Abstraction
// {
	
// 	function __construct(Implementor $imp)
// 	{
// 		$this->myImp = $imp;
// 	}

// 	public function operation()
// 	{
// 		$this->beforeOperation();
// 		$this->myImp->operationImp();
// 		$this->afterOperation();
// 	}

// 	public function beforeOperation()
// 	{
// 		echo "在方法执行之前做一些前置操作 <br>";
// 	}
// 	public function afterOperation()
// 	{
// 		echo "在方法执行之后收尾操作 <br>";
// 	}
// }

// $imp = new MyImplementorA();
// $pa = new RefinedAbstraction($imp);
// $pa->operation();

// $pb = new RefinedAbstraction(new MyImplementorB());
// $pb->operation();