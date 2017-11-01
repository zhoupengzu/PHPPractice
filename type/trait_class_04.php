<?php
  /**
   * 多个trait可以组合成一个trait
   */
  trait Hello{
    function sayHello(){
      echo "Hello,";
    }
  }
  trait World{
    function sayWorld(){
      echo "World!";
    }
  }
  trait HelloWorld{
    use Hello,World;
  }
  class Say{
    use HelloWorld;
  }
  $say = new Say();
  $say -> sayHello();
  $say -> sayWorld();
 ?>
