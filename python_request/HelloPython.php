<?php
/**
 * Created by PhpStorm.
 * User: zhoupengzu
 * Date: 2017/11/16
 * Time: 14:15
 */
echo "Hello python\n";
//echo json_encode(array("name"=>"zhoupengzu",age=>20));
//echo json_encode(array(1,2,3,4));
$name = $_GET["name"];
if ($name == "zhoupengzu"){
    echo "correct user name";
}else{
    echo "user name false";
}