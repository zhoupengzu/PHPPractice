<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>连接和关闭数据库</title>
  </head>
  <body>
    <?php
      /**
       * mysqli_connect(servername,username,password)用来连接数据库
       * mysqli_close()用来关闭数据库
       */
       $sql = mysqli_connect("127.0.0.1","root","wohengaoxing888");
       if (!$sql) {
         echo "open failed";
       }else{
         echo "open success";
       }
       mysqli_close($sql);
     ?>
  </body>
</html>
