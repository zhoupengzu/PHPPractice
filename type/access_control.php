<?php
  namespace access_control;
  class MyClass {
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";
    function printHello(){
      echo $this -> private,"<br />";
      echo $this -> protected,"<br />";
      echo $this -> public,"<br />";
    }
  }
  $myClass = new MyClass();    //此时已经相当于access_control\MyClass()
  // echo $myClass -> private;   //会报错
  // echo $myClass -> protected;  //会报错
  echo $myClass -> public,"<br />";   //OK
  $myClass -> printHello();
  class SubClass extends MyClass{
    function printSubHello(){
      echo $this -> public;
      echo $this -> protected;  //因为是子类，所以可以访问到
      echo $this -> private;   //这里会访问不到
    }
  }
  $subClass = new SubClass();
  $subClass -> printSubHello();
 ?>
