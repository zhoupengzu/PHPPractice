<?php
  require "type_util.php";
  $bool = TRUE;
  logType($bool);
  echo "强制转换"."<br />";
  $result = settype($bool,"int");
  echo $result,"<br />";
  if ($result) {
    echo "转换后类型为：",gettype($bool),"<br />";  //integer
  }else{
    echo "转换类型失败","<br />";
  }
  $bool_false = "false";
  settype($bool_false,"bool");
  echo "转换后为：",$bool_false,"<br />";  //1

  $empty_str = "";
  if (!$empty_str) {
    echo "空字符串为false<br />";
  }else{
    echo "空字符串为true<br />";
  }
  $zero_str = "0";
  if (!$zero_str) {
    echo "字符串0为false<br />";
  }else{
    echo "字符串0为true<br />";
  }
  $empty_arr = array();  //空数组为true
  // settype($empty_arr,"bool");
  if($empty_arr){
    echo "空数组为false<br />";
  }else{
    echo "空数组为true<br />";
  }
 ?>
