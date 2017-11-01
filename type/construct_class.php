<?php
// 构造函数__construct，析构函数__destruct
  class ConstructClass {
    public function __construct(){
      echo __METHOD__,"<br />";
    }
  }
  class SubClass extends ConstructClass{
    function __construct(){
      parent::__construct();  //调用父类的构造函数
    }
  }
  $construct_class = new ConstructClass();
  $sub_class = new SubClass();
 ?>
