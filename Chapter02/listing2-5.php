class MyObject {

  public static $myStaticVar=0;

  function myMethod() {
    self::$myStaticVar += 2;
    echo self::$myStaticVar . "\n";
  }

}

class MyOtherObject extends MyObject {

  public static $myStaticVar=0; //Override myStaticVar

  function myOtherMethod() {
    echo parent::$myStaticVar . "\n";
    echo self::$myStaticVar . "\n";
  }

}

$instance1 = new MyObject();
$instance1->myMethod();
$instance2 = new MyObject();
$instance2->myMethod();
$instance3 = new MyOtherObject();
$instance3->myOtherMethod();