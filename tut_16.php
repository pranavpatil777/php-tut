<?php
// we see that if we try to call a protected method (intro()) from outside the class, we will receive an error.
// we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
    $this -> intro();
  }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
// $strawberry->intro(); // ERROR. intro() is protected

// The final keyword can be used to prevent class inheritance or to prevent method overriding.

final class myFruit {

}
// produce an error cannot extends with final keyword
class Strawberry2 extends myFruit {
  // some code
}


?>