<?php
  class MyClass {
    const CONSTANT = "constant value";
    //nowdoc语法
    const NOW_DOC_CONSTANT = <<<'EOT'
    这是一个nowdoc语法定义的常量，
    可以用在任意的静态数据环境中，最典型的示例是用来初始化类的属性或常量
EOT;
    //heredoc语法
    const HERE_DOC_CONSTANT = <<<EOT
    这是一个heredoc语法，
    可以用 Heredoc 结构来初始化静态变量和类的属性和常量
EOT;
    function showConstant(){
      echo self::CONSTANT,"<br />";
    }
  }
  //调用方式一：
  echo MyClass::NOW_DOC_CONSTANT,"<br />";
  //调用方式二：
  $myClass = new MyClass();
  $myClass -> showConstant();
  //调用方式三(PHP5.3)：
  $myClass_str = "MyClass";
  echo $myClass_str::CONSTANT,"\n";
  //调用方式四(PHP5.3)：
  echo $myClass::CONSTANT,"<br />";
  //引入auto_register_01.php
  spl_autoload_register(function(){
    require_once "auto_register_01.php";
  });
  $auto_register = new MyClass01();
  $auto_register -> test();
 ?>
