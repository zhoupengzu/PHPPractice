<!--变量的定义-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>变量定义</title>
  </head>
  <body>
    <?php
    echo "================================define============================";
      $a=10;
      $text="I am a string";
      //php的作用域：局部、全局、静态
      /*函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问，如果要在函数内部访问，需要在实用的时候添加global。
        函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
      */
     echo "================================global & local============================";
      $globalVar="I am a global Var";
      $b_global=10;
      function varArea(){
        $localVar="I am a local var";
        global $b_global;  //因为这里使用了全局变量，所以需要先添加一个global，否则会出错
        $c = $b_global + 5;
        echo $c;
      }
      varArea();
      echo "================================GLOBALS[]============================";
      /*
        全局变量存储在一个名为GLOBALS的数组中，可以通过变量名直接访问以及修改变量
       */
      function changeGlobalValue(){
        $GLOBALS['globalVar']="I am a global Var,but I am changed!";
      }
      changeGlobalValue();
      echo $globalVar;  //这里的打印已经变了
      echo "================================static============================";
      /*
        static:一般的定义的变量在函数消失的时候就会随之被销毁，但是static修饰的会一直存储到工程结束
       */
      function testStaticValue(){
        static $value = 0;
        echo $value;
        $value++;
      }
      testStaticValue();
      testStaticValue();
      testStaticValue();  //这里会打印 2
     ?>
  </body>
</html>
