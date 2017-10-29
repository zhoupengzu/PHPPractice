<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>函数</title>
  </head>
  <body>
    <?php
      /**
       * 定义和运行函数
       */
      function defineFunction(){
        echo "I am Running <br />";
      }
      defineFunction(); //运行
      /**
       * 函数传参
       */
      function defineFunctionWithParm($value1,$value2){
        echo "$value1","&nbsp;$value2","<br />";
      }
      defineFunctionWithParm("First",10);
      /**
       * 参数有默认值
       */
      function functionParmWithDefultValue($value1,$value2="I am default"){
        echo "$value1","&nbsp;$value2<br />";
      }
      functionParmWithDefultValue("from out side"); //什么都不传的时候才会起作用
      functionParmWithDefultValue("from out side",NULL);
     ?>
  </body>
</html>
