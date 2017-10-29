<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>数组</title>
  </head>
  <body>
    <?php
      /**
       * 数组创建：array（）
       * 有三种数组类型：
       *  1、索引数组，带有数字索引的数组
       *  2、关联数组，带有指定键的数组，使用“=>”号将键值联系起来，类似于常说的字典
       *  3、多维数组
       */
      $indexArr = array();
      $indexArr[0] = "zero";
      // $indexArr[1] = NULL;  //尝试打开这一行看看效果
      $indexArr[2] = "first";
      foreach ($indexArr as $value){
        echo $value."<br />";
      }
      echo count($indexArr);
      echo "<br />";
      //关联数组方式一
      $keyValueArr = array("peter"=>20,"tom"=>30);

      /*关联数组方式二
        $keyValueArr=array();
        $keyValueArr["peter"] = 20;
        $keyValueArr["tom"] = 30;
      */
      echo count($keyValueArr),"<br />";
      $keyValueArr["tom"] = NULL;
      echo count($keyValueArr),"<br />";
      echo $keyValueArr["peter"];
      /**
       * 数组排序
       * 
       * sort() - 以升序对数组排序
        *  rsort() - 以降序对数组排序
        *  asort() - 根据值，以升序对关联数组进行排序
        *  ksort() - 根据键，以升序对关联数组进行排序
        *  arsort() - 根据值，以降序对关联数组进行排序
        *  krsort() - 根据键，以降序对关联数组进行排序
       */
     ?>
  </body>
</html>
