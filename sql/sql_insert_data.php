<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>向数据库插入数据</title>
  </head>
  <body>
    <?php
      require "constant_sql.php";
      //连接数据库
      $sql = mysqli_connect($sql_server,$sql_name,$sql_password);
      if (!$sql) {
        die("connect database failed");
      }
      //创建数据库
      $create_str = "CREATE DATABASE my_db";
      $create = mysqli_query($sql,$create_str);
      if (!create) {
        die("create database failed");
      }
      //创建表
      //在创建表之前，先选择数据库
      $select_db = mysqli_select_db($sql,"my_db");
      if (!select_db) {
        die("failed");
      }
      //建表
      $create_table_str = "CREATE TABLE Persons(
        personID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(personID),
        FirstName varchar(15),
        LastName varchar(15),
        Age int
      )";
      $create = mysqli_query($sql,$create_table_str);
      if (!$create) {
        echo "create table failed";
      }
      //插入数据
      /**
       * INSERT INTO table_name (column1, column2,...) VALUES (value1, value2,....)
       */
      $insert_str="INSERT INTO Persons(FirstName,LastName,Age) VALUES('zhou','pengzu',20)";
      $insert = mysqli_query($sql,$insert_str);
      if (!insert) {
        echo "insert failed";
      }else{
        echo "insert success";
      }
      mysqli_close($sql);
     ?>
  </body>
</html>
