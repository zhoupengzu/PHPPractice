<?php
  require "constant_sql.php";
  /**
   * 筛选
   * select column_name(s)或者（*）from table_name
   */
   $sql = mysqli_connect($sql_server,$sql_name,$sql_password);
   mysqli_select_db($sql,"my_db");
   $select_str = "select * from Persons";
   $select_names_str = "select FirstName,LastName from Persons";
   $result = mysqli_query($sql,$select_str);
  // $result = mysqli_query($sql,$select_names_str);
   while ($row = mysqli_fetch_array($result)) {
     echo "FirstName:{$row["FirstName"]},LastName:{$row["LastName"]},age:{$row["Age"]}<br />";
   }
   /**
    * 更新：UPDATE table_name SET column_name = new_value WHERE column_name = some_value
    * 删除：DELETE FROM table_name WHERE column_name = some_value
    */
   mysqli_close($sql);
 ?>
