<!--EchoAndPrint.php-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>日志打印</title>
  </head>
  <body>
    <?php
      /**
       * echo - 能够输出一个以上的字符串
       * print - 只能输出一个字符串，并始终返回 1
       */
      echo "<h2>I am a Html Tag</h2>";
      print "<h2>I am a Html Tag</h2>";

      echo "I","can","print","lots<br />";  //注意多个之间用逗号分隔开
      print "I can print only single";
      echo "<br />";
      $cars=array("Volvo","BMW","SAAB");
      echo "My car is a $cars[1]<br />";
      echo "My car is a {$cars[1]}<br />";
      print "My car is a $cars[2]";
    ?>
  </body>
</html>
