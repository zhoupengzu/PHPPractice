<?php
  /**
   * 使用as修改访问权限
   */
  trait PublicTrait{
    function publicFunc(){
      echo "这个方法的访问权限将被修改，不能被直接访问";
    }
  }
  trait OriginTrait{
    function oriFunc(){
      echo "我可以被直接访问";
    }
  }
  class MyClass{
    use OriginTrait,PublicTrait{
      publicFunc as protected;  //这里将trait里的方法的权限修改为了protected
    }
  }
  $my_class = new MyClass();
  $my_class -> oriFunc();
  $my_class -> publicFunc();  //这一句会报错
 ?>
