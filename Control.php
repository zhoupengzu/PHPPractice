<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>控制语句</title>
  </head>
  <body>
    <?php
      /**
       * if...else、switch...case、while、do...while和其他的语言类似
       * 这里着重说foreach for(arr as $val)
       */
      $colors = array("red","green","blue","yellow");
      foreach($colors as $value){
        echo "$value<br />";
      }
     ?>
  </body>
</html>
