<?php 
//  Static methods used without creating the instace of the method
// 1'st way to call a static methods 

class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  // Call static method
  greeting::welcome();
  
  echo "<br>";
  
  class greeting2 {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  new greeting2();

  echo "<br>";

//   Static methods can also be called from methods in other classes. To do this, the static method should be public:
class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();

  echo "<br>";

//   To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected

class domain {
    protected static function getWebsiteName() {
      return "hello World!";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
?>