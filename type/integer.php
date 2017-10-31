<?php
  echo "integer范围：",PHP_INT_SIZE,"<br />";   //8字节
  echo "integer最大值：",PHP_INT_MAX,"<br />";
  echo "integer最小值：",PHP_INT_MIN,"<br />";
  $str_to_int_0 = (int)"哈哈";
  echo $str_to_int_0,"<br />"; //0
  $str_to_int_1 = (int)"2哈哈";
  echo $str_to_int_1,"<br />"; //2
  $str_to_int_2 = (int)"2.3";
  echo $str_to_int_2,"type:",gettype($str_to_int_2),"<br />"; //2integer

  $float_to_int_0 = (int)(PHP_INT_MAX + 2);
  echo $float_to_int_0,"<br />";  //不是期望值
  
  $float_to_int_1 = PHP_INT_MAX;
  echo $float_to_int_1," type:",gettype($float_to_int_1),"<br />";  //integer
  $float_to_int_1 = $float_to_int_1 + 2;
  echo $float_to_int_1," type:",gettype($float_to_int_1),"<br />";  //double
 ?>
