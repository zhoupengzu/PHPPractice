<?php
/**
 * trait中的抽象方法
 * 使用了包含trait的类，必须实现trait中的抽象方法，否则需要把该类标记为abstra
 */
trait AbstractTrait{
  private static $private_var = "";
  private function originFunc(){
    echo "我是原生的方法";
  }
  static function staticFunc(){
    
  }
  abstract function abstractFunc();
}
abstract class MyClass{
  use AbstractTrait;
}
class MyClass01{
  use AbstractTrait;
  function abstractFunc(){

  }
}
