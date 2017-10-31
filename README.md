# PHPPrctice
PHP入门练习

mysql用户名：root
终端修改密码：SET PASSWORD FOR 'root'@'localhost' = PASSWORD('newpass');
mysql函数命令参考地址：http://php.net/manual/zh/ref.mysql.php

PHP 脚本可以放在文档中的任何位置。
PHP 脚本以 <?php 开始，以 ?> 结束
1.php变量定义和使用：$a=10以$开始
2.超全局变量 $_GET 和 $_POST 用于收集表单数据（form-data）
3.什么是 $_SERVER["PHP_SELF"] 变量？
  $_SERVER["PHP_SELF"] 是一种超全局变量，它返回当前执行脚本的文件名。
  因此，$_SERVER["PHP_SELF"] 将表单数据发送到页面本身，而不是跳转到另一张页面。这样，用户就能够在表单页面获得错误提示信息。
4.什么是 htmlspecialchars() 函数？
  htmlspecialchars() 函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt; 。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。

apache启动：sudo apachectl start
apache结束：sudo apachectl stop
apache重新启动：sudo apachectl restart
apache配置文件路径：/etc/apache2/httpd.conf

一、数据类型
假设有变量$a,则：
  使用var_dump()来查看某个变量的类型和值，var_dump($a)；
  使用gettype（）来获取某个变量的类型,gettype($a);
  使用is_type（）来判断是否是某个类型，is_string($a),is_int($a)...
  使用settype()来强制转换类型，返回bool值来表示转换是否成功，settype($a,"int")将$a转换为int类型
  或者直接使用类似于这种方式：$bar = (boolean) $foo; 强制转换，但是我们不能从中知道其结果和会发生什么

1、boolean
对大小写不敏感，即：True、true、TRUE等都会被当成boolean类型
会被认为是false的情况：
1）False自己，包括自己的各种变形，但是“false”是true
2）整数0和浮点数0
3）空字符串和字符串0
4)空数组(这个有问题)
5）NULL、没有初始化的
