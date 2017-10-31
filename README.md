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

5、类class和对象object
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

1）初始化,使用new初始化
$foo = new foo();
或者：$foo_str = "foo";$foo = new $foo_str();  
****如果该类属于一个名字空间，则不能用字符串方式初始化
2）不支持多继承，父类用final修饰的不能再被重写；子类重写的方法中，可以通过parent::方法名调用父类相同的方法
3）使用 ClassName::class 你可以获取一个字符串，包含了类 ClassName 的完全限定名称。这对使用了 命名空间 的类尤其有用

6、命名空间(关键词：namespace,必须在其它所有代码之前声明命名空间，除了一个以外：declare关键字)
1)解决的问题
用来解决在编写类库或应用程序时创建可重用的代码如类或函数时碰到的两类问题：
  1、用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
  2、为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。
2）定义命名空间
类（包括抽象类和traits）、接口、函数和常量会受命名空间的影响
** 同一个命名空间可以定义在多个文件中，即允许将同一个命名空间的内容分割存放在不同的文件中

<html>
<?php
namespace MyProject; // 致命错误 -　命名空间必须是程序脚本的第一条语句
?>

3)在同一个文件中定义多个命名空间
a、简单组合语法（不推荐）
<?php
  namespace MyProject;

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }

  namespace AnotherProject;

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
?>

b、大括号语法
<?php
  namespace MyProject{

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
}

  namespace AnotherProject{

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
}
?>

4)全局命名空间，全局代码必须用一个不带名称的 namespace 语句加上大括号括起来
<?php
  declare(encoding='UTF-8');
  namespace MyProject {

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
  }

  namespace { // 全局代码
  session_start();
  $a = MyProject\connect();
  echo MyProject\Connection::start();
  }
?>

5）使用命名空间（基础）
有三种方式：
a、非限定名称
b、限定名称
c、完全限定名称（以\开头）
对于函数和常量来说，如果当前命名空间中不存在该函数或常量，PHP 会退而使用全局空间中的函数或常量
