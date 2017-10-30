<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>表单验证</title>
  </head>
  <body>
    <?php
        function test_input($text){
          $data = trim($data);  //去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
          $data = stripslashes($data); //删除用户输入数据中的反斜杠（\）
          $data = htmlspecialchars($data); //把特殊字符转换为 HTML 实体
          return $data;
        }
        $name=$email=$website=$content=$gender="";
        $nameErr=$emailErr=$websiteErr=$genderErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(empty($_POST["name"])){
            $nameErr="姓名不能为空";
          } else {
            $name = test_input($_POST["name"]);
          }
          if(empty($_POST["email"])){
            $emailErr="邮箱不能为空";
          }else {
            $email = test_input($_POST["email"]);
          }
           if (empty($_POST["website"])) {
             $website="";
           }else{
             $website = test_input($_POST["website"]);
           }
           if (empty($_POST["content"])) {
             $content="";
           }else{
             $content = test_input($_POST["content"]);
           }
           if (empty($_POST["gender"])) {
             $genderErr="性别不能为空";
           }else{
             $gender = test_input($_POST["gender"]);
           }
        }

     ?>
      <form action="<?php
         htmlspecialchars($_SERVER['PHP_SELF']);  //$_SERVER是超全局变量,这样可以防止跳转
       ?>" method="post">
        Name:<input type="text" name="name" /><span>*<?php echo $nameErr?></span><br />
        Email:<input type="text" name="email" /><span>*<?php echo $emailErr?><br />
        Website:<input type="text" name="website" /><span><?php echo $websiteErr?><br />
        Content:<textarea name="content" rows="5" cols="40"></textarea><br />
        Gender:<input type="radio" name="gender" value="female" />female
        <input type="radio" name="gender" value="male" />male<span>*<?php echo $genderErr?><br />
        <input type="submit" />
      </form>
  </body>
</html>
