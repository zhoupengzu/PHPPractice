<?php
  /**
   * 接口的定义通过：interface
   * 接口的实现通过：implements，实现的类要实现接口中定义的所有方法
   * 接口之间可以继承，使用extends
   * 每个类可以实现多个接口，多个接口之间使用逗号分隔开
   * 接口中的方法不能重名
   * 接口中可以定义常量
   * 类中的实现的接口要和接口中定义的完全一样，即参数名、参数个数和方法名都要一个样
   * 接口中不能定义变量，只能定义常量 （区别于抽象类）
   * 接口中所有的方法都是只定义不实现（区别于抽象类）
   * 修饰符只能为public
   */
  interface iTemplate{
    // $interface_var = "";
    const INTERFACE_VAR = "接口中的常量";
    public function getHtml();
    public function printMyInfo();
  }
  class MyClass implements iTemplate{
    public function getHtml(){

    }
    function printMyInfo(){

    }
  }
 ?>
