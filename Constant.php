<!--Constant.php-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>常量</title>
  </head>
  <body>
    <?php
    /**
     * 使用define（）函数定义
     * 1、首个参数定义常量的名称
     * 2、第二个参数定义常量的值
     * 3、可选的第三个参数规定常量名是否对大小写不敏感。默认是 false。
     * 4、使用常量时不再需要美元符
     */
    define("name","I am a constant value",true);
    echo name;
     ?>
  </body>
</html>
