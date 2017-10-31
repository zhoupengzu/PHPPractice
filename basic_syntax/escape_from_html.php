<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $expression = 3; ?>
    <?php if($expression == 1): ?>
      <?php
        echo "I am true";
      ?>
    <?php elseif($expression == 2): ?>
      <?php
        echo "I am false";
      ?>
    <?php else:?>
      <?php
        echo "I am others";
      ?>
    <?php endif;?>
  </body>
</html>
