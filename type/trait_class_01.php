<?php
  /**
   * 用来解决类的单继承问题
   * 优先级：当前类的成员方法覆盖trait中的相同方法，trait会覆盖被继承的方法
   */
  trait TraitBaseClass{
    private  $trait_var = "trait中能定义变量，但是需要显示的标记为public、protected、private";
    // public const TRAIT_CONSTANT = "trait不能定义常量";
    function printInfo(){
      echo __METHOD__,"方法必须实现";
    }
  }
  class BaseClass{
    function printInfo(){
      echo __METHOD__;
    }
  }
  class MyClass extends BaseClass{
    use TraitBaseClass;
    function printInfo(){
      // parent::printInfo();
      echo __METHOD__;
    }
  }
  $my_class = new MyClass();
  $my_class -> printInfo();
  echo "<br />";
  //********************************************
  class Base{
    public function sayHello(){
      echo "Hello,";
    }
  }
  trait SayWorld{
    function sayHello(){
      parent::sayHello();   //这里的调用父类方法，就看到时候是使用在哪个类中了
      echo "World";
    }
  }
  class MyHelloWorld extends Base{
    use SayWorld;
  }
  $say = new MyHelloWorld();
  $say -> sayHello();
 ?>
