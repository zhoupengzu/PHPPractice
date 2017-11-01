<?php
  /**
   * 多个trait
   * 通过逗号分隔，在 use 声明列出多个 trait，可以都插入到一个类中
   * 多个trait中的方法不能重复，重复了有两种解决办法：明确指出会调用的、起别名(建立在明确指出调用的基础上)
   */
  trait Hello{
    function sayHello(){
      echo "Hello,";
    }
    function smallTalk(){
      echo __METHOD__;
    }
    function bigTalk(){
      echo __METHOD__;
    }
  }
  trait World{
    function sayWorld(){
      echo "World!";
    }
    // function sayHello($name){
    //
    // }
    function smallTalk(){
      echo __METHOD__;
    }
    function bigTalk(){
      echo __METHOD__;
    }
  }
  class HelloWorld{
    use Hello,World{
      Hello::smallTalk insteadof World;
      World::bigTalk insteadof Hello;
    }   //这里不能有分号作为结束
  }
  class LoudlySpeak{
    use Hello,World {
      Hello::smallTalk insteadof World;
      World::bigTalk insteadof Hello;
      World::bigTalk as talk;
    }
  }
  $say = new HelloWorld();
  $say -> sayHello();
  $say -> sayWorld();
  $say -> smallTalk();
  $say -> bigTalk();
  echo "<br />";
  $say = new LoudlySpeak();
  $say -> sayHello();
  $say -> sayWorld();
  $say -> smallTalk();
  //下面两个是等价的
  $say -> bigTalk();
  $say -> talk();
