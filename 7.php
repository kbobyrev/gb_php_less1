<?php //This exercise as same the second part of exercise 5-6
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
	/**
	 * 
	 */
	class B extends A
	{

	}
	$a1=new A;
	$b1=new B;
	$a1->foo();//1
	$b1->foo(); //1
	$a1->foo(); //2
	$b1->foo();//2
	// cos A and B are different classes and it have different variable "x"

?>