<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>创建数据库</title>
  </head>
  <body>
    <?php
      require 'constant_sql.php';
      //打开数据库
      $sql = mysqli_connect($sql_server,$sql_name,$sql_password);
      if (!$sql) {
        die('Could not connect');
      }

      //关闭数据库
      mysqli_close($sql);
     ?>
  </body>
</html>
