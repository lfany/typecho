<?php
/**
 * Created by PhpStorm.
 * User: dp
 * Date: 2016/11/16
 * Time: 17:41
 */

//phpinfo();

//header("HTTP/1.0 204 No Content");

echo dirname("http://www.baidu.com/index?a=11&b=2");
echo "<br/>";
foreach($_SERVER as $key => $value){
    echo $key;
    echo " === ";
    echo $value;
    echo "<br/>";
}
exit();