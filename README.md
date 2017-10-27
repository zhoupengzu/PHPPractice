# PHPPrctice
PHP入门练习

PHP 脚本可以放在文档中的任何位置。
PHP 脚本以 <?php 开始，以 ?> 结束

apache启动：sudo apachectl start
apache结束：sudo apachectl stop
apache重新启动：sudo apachectl restart
apache配置文件路径：/etc/apache2/httpd.conf

配置PHP
1、找到Apache的配置文件，在目录/etc/apache2/下，打开Finder，选择"前往"-"前往文件夹"，输入"/etc/apache2/"，找到其中的"httpd.conf"文件
2、去掉LoadModule php5_module libexec/apache2/libphp5.so前面的#号
3、restart apache
