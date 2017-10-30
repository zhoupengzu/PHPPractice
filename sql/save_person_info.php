<?php
  require "constant_sql.php";
  //连接数据库
  $sql = mysqli_connect($sql_server,$sql_name,$sql_password);
  // //创建库
  // $create = mysqli_query($sql,"create database my_db");
  //选中库
  $select = mysqli_select_db($sql,"my_db");
  // //建表
  // $create = mysqli_query($sql,"create table Person(
  //   presonID int NOT NULL INCREMENT,
  //   PREMARY KEY(personID),
  //   FirstName varchar(15),
  //   LastName varchar(15),
  //   Age int
  // )");
  //插入数据
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $age = $_POST["age"];
  if (empty($first_name)) {
    $first_name = "x";
  }
  if (empty($last_name)) {
    $last_name = "xx";
  }
  if (empty($age)) {
    $age = 0;
  }
  echo $first_name,$last_name,$age,"<br />";
  $insert_str = "insert into Persons(FirstName,LastName,Age) values('$first_name','$last_name',$age)";
  $insert = mysqli_query($sql,$insert_str);
  if (!$insert) {
    echo "faled";
  }
  mysqli_close($sql);
 ?>
