<?php
  //抽象方法
  abstract class AbstractClass{
    // abstract public $abstract_var = ";";  //抽象方法中不能定义属性
    abstract function abstractFunc();
    abstract protected function protectedAbstractFunc();
    abstract function confuseFunc($name);
    function notAbstractFunction(){    //抽象类中可以定义非抽象方法
      echo "我不是抽象方法";
    }
  }
  /**
   * 抽象类不能初始化实例对象
   */
  // $abstract_class = new AbstractClass();
  //因为没有实现所有的抽象方法，所以这里依旧是抽象类
  abstract class MyClass01 extends AbstractClass{
    public function protectedAbstractFunc(){    //因为实现的抽象类的访问权限只能更宽松，所以这儿的权限只能是public或者protected
      echo "";
    }
    // function confuseFunc(){   //该方法不是抽象类中的方法，编译不通过
    //
    // }
  }
  //这里实现了所有的抽象类中的抽象方法，所以该类不用定义为抽象类
  class MyClass02 extends AbstractClass{
    function abstractFunc(){

    }
    function protectedAbstractFunc(){

    }
    function confuseFunc($name){

    }
  }
 ?>
