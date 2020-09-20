<?php
	/**
	 * 
	 */
	class A 
	{
		public function foo(){
			static $x=0;
			echo ++$x;
		}
	}
	$a1=new A();
	$a2=new A();

	$a1->foo();//1 
	$a2->foo();//2
	$a1->foo();//3
	$a2->foo();//4
	//cos a static var changes on each function call
	echo "<br>";

	class B 
	{
		public function foo(){
			static $x=0;
			echo ++$x;
		}
	}
	class C extends B
	{

	}

	$b1 = new B();
	$c1 = new C();

	$b1->foo(); //1
	$c1->foo(); //1
	$b1->foo(); //2
	$c1->foo(); //2

	// cos B and C are different classes and it have different variable "x"

?>