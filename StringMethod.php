<!--StringMethod.php-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>string的方法</title>
  </head>
  <body>
    <?php
      $text = "I am a string";
      //计算字符串长度:strlen(var)
      $len = strlen($text);
      echo "字符串的长度为：$len<br />";
      //用于检索字符串内指定的字符或文本:strpos(var,find)
      $position = strpos($text,"am");
      echo "位置：$position<br />";
    ?>
  </body>
</html>
