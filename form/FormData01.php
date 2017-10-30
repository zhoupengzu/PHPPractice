<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>获取表单数据</title>
  </head>
  <body>
    <?php
    /**
     * 使用超全局变量$_POST和$_GET获取表单发送的数据，其获取到的是数组的键值类型数组，即字典
     * @type {String}
     */
      echo "post:",$_POST["name"],$_POST["email"];
      echo "<br />";
      echo "get:",$_GET["name"],$_GET["email"];
     ?>
  </body>
</html>
