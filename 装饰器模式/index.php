<?php 
interface Conmponent {
	public function operation();
}

/**
* juti
*/
class MyComponent implements Conmponent
{
	public function operation()
	{
		echo "这是正常的组件方法";
	}
}

interface Decorator