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

2、integer
八进制以0（零）开头、十六进制以0x开头，二进制（PHP5.4新增）以0b开头
integer范围大小和运行平台有关，但是在Windows上永远为32位
1）常量
PHP_INT_SIZE确定范围、PHP_INT_MIN获取最小值（PHP7.0.0新增）、PHP_INT_MAX获取最大值(PHP5.0.5新增)
2)NaN and Infinity会被强制转换为0
3)当没有强制转换的时候，如果值超出了范围，则该类型会自动转为浮点数

3、string
定义string有四种方式：单引号、双引号、heredoc syntax、nowdoc syntax
1)单引号和双引号
最大的区别在于单引号里的引用变量不会被执行，而双引号中的引用变量会被替换执行
2）heredoc syntax

$str = <<<"EOD"   *****这里的双引号本来不添加，但是从PHP5.3开始可以选择是否添加
  Example of string
  spanning multiple lines
  using heredoc syntax.
EOD;  *******这里有两个要求：不能有缩紧；必须有分号（；）；后面不能有空格等其他的东西
规则：以相同的identifier（这里是EOD）开始并结束；
     只能是字母数字和下划线；
     只能以字母和下划线开头
3）newdoc syntax
具体用法和heredoc相同，定义形式上不同的地方在于：$str = <<<‘EOD’这里需要单引号
在使用上，newdoc syntax不会执行其中包含的变量

4、array
当定义的数组是键值类型的时候，key可以是integer或者string
所以如果key是浮点数，会存储为key为取整后，如key为7.8，则存储的时候会变为7；
bool类型的会转为integer；NULL会被转为空字符串；
字符串“8”会被转换为数字8
****
数组的索引从0开始，当赋值的时候，如果不指定key，则默认key为当前最大索引（即不一定是数组中的元素个数-1），字符串不算

1）unset（不会重置索引index，如果想重置索引，使用array_values（））
unset($arr[5]) 删除数组的下标为5的元素
unset($arr) 删除数组中的所有元素
