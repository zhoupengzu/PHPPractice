<?php
  $arr = array(2,3,4,5,6);   //最后一个元素的后面的“，”号可以省略
  print_r($arr);
  foreach($arr as $value){
    echo "{$value}","<br />";
  }
  //方式一
  // foreach($arr as $index=>$value){
  //   echo $index,"--",$value,"<br />";
  //   unset($arr[$index]);
  // }
  print_r($arr);
  //方式二
  $arr[] = 7;
  print_r($arr);
  echo "<br />";
  unset($arr);
  $arr[] = 8;
  print_r($arr);   //方式一和方式二的输出结果不同,方式一输出：Array ( [5] => 8 )方式二输出：Array ( [0] => 8 )

  $a = array();
  $a['color'] = 'red';
  $a['taste'] = 'sweet';
  $a['shape'] = 'round';
  $a['name']  = 'apple';
  // $a["3"] = 3;   //这句打开与否会直接影响结果
  $a[] = 4;
  print_r($a);
 ?>
