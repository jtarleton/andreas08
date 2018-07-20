<?php 
trait Hello {
	    public function sayHello() {
		            echo 'Hello ';
			        }
}

trait World {
	    public function sayWorld() {
		            echo 'World!';
			        }
}

trait HelloWorld {
	    use Hello, World;
}

class MyHelloWorld {
	    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();

trait A {
	  protected function foo() {
		      echo 'I am foo.'; return $this;
		        }
}
trait B {
	use A;
	  public function goo() {
		      $a = new D();
		          $a->foo();
		        }
}
trait C {
		use B;
}
class D {
		use C;
}

$d = new D;
$d->goo();



