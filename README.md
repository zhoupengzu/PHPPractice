# PHPPrctice
PHP入门练习

mysql用户名：root
终端修改密码：SET PASSWORD FOR 'root'@'localhost' = PASSWORD('newpass');

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
