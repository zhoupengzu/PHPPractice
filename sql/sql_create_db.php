<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>创建数据库</title>
  </head>
  <body>
    <?php
      require 'constant_sql.php';
      //打开数据库，返回数据库连接标识
      $sql = mysqli_connect($sql_server,$sql_name,$sql_password);
      if (!$sql) {
        die('Could not connect');
      }
      /**
       * 创建数据库
       * sql语句：CREATE DATABASE database_name
       * php命令：过程化mysqli_query(数据库实例如sql，sql语句);或者面向对象化：sql(数据库连接标识)->query(sql语句)
       */
      //创建一个叫做my_db数据库
      // $create=mysqli_query($sql,"CREATE DATABASE my_db");  //面向过程
      $create=$sql->query("CREATE DATABASE my_db");  //面向对象
      if(!create){
        die("create failed");
      }else{
        echo "create success or already exist!<br />";
      }
      //建表
      
      //关闭数据库
      mysqli_close($sql);
     ?>
  </body>
</html>
