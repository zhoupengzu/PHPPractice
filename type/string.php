<?php
  $str = "I am a example";
  echo '$str','<br />',"<br />";   //会发现这里的$str并不会运行，这里输出为：$str，但是html标签起作用了
  echo "$str","<br />";   //这里起作用了，输出I am example
  echo 'This will not expand: \n a newline',"<br />"; //原样打印出来
  echo "This will expand: \n a newline","<br />";  //换行符不见了

  $heredoc = <<<"EOD"
      I
      am
      in
      severl
      lines
EOD;
  echo $heredoc,'<br />';
  echo <<<"FOOBAR"
Hello World!

FOOBAR;
echo '<br />';
  $str = <<<'EOD'
    Example of string
    spanning multiple lines
    using nowdoc syntax.
EOD;
  echo $str,"<br />";

 ?>
