﻿<?php 
echo $_SERVER['PHP_SELF'];//php文件所在路径
echo "<br>";
echo $_SERVER['SERVER_NAME'];//服务器地址
echo "<br>";
echo $_SERVER['HTTP_HOST'];//服务器地址加端口
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//服务器全路径
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//客户端的ua
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//服务器的地址
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];//远程主机的ip(客户端)
echo "<br>";
echo $_SERVER['SERVER_ADDR'];//服务器的ip
?>
<!--
示例
/phpnew/jk/msg.php
127.0.0.1
127.0.0.1:8080
http://127.0.0.1:8080/phpnew/jk/
Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36
/phpnew/jk/msg.php

$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目。
以下实例中展示了如何使用$_SERVER中的元素:
下表列出了所有 $_SERVER 变量中的重要元素:

元素/代码	描述
$_SERVER['PHP_SELF']	当前执行脚本的文件名，与 document root 有关。例如，在地址为 http://example.com/test.php/foo.bar 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /test.php/foo.bar。__FILE__ 常量包含当前(例如包含)文件的完整路径和文件名。 从 PHP 4.3.0 版本开始，如果 PHP 以命令行模式运行，这个变量将包含脚本名。之前的版本该变量不可用。
$_SERVER['GATEWAY_INTERFACE']	服务器使用的 CGI 规范的版本；例如，"CGI/1.1"。
$_SERVER['SERVER_ADDR']	当前运行脚本所在的服务器的 IP 地址。
$_SERVER['SERVER_NAME']	当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。(如: www.runoob.com)
$_SERVER['SERVER_SOFTWARE']	服务器标识字符串，在响应请求时的头信息中给出。 (如：Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	请求页面时通信协议的名称和版本。例如，"HTTP/1.0"。
$_SERVER['REQUEST_METHOD']	访问页面使用的请求方法；例如，"GET", "HEAD"，"POST"，"PUT"。
$_SERVER['REQUEST_TIME']	请求开始时的时间戳。从 PHP 5.1.0 起可用。 (如：1377687496)
$_SERVER['QUERY_STRING']	query string（查询字符串），如果有的话，通过它进行页面访问。
$_SERVER['HTTP_ACCEPT']	当前请求头中 Accept: 项的内容，如果存在的话。
$_SERVER['HTTP_ACCEPT_CHARSET']	当前请求头中 Accept-Charset: 项的内容，如果存在的话。例如："iso-8859-1,*,utf-8"。
$_SERVER['HTTP_HOST']	当前请求头中 Host: 项的内容，如果存在的话。
$_SERVER['HTTP_REFERER']	引导用户代理到当前页的前一页的地址（如果存在）。由 user agent 设置决定。并不是所有的用户代理都会设置该项，有的还提供了修改 HTTP_REFERER 的功能。简言之，该值并不可信。)
$_SERVER['HTTPS']	如果脚本是通过 HTTPS 协议被访问，则被设为一个非空的值。
$_SERVER['REMOTE_ADDR']	浏览当前页面的用户的 IP 地址。
$_SERVER['REMOTE_HOST']	浏览当前页面的用户的主机名。DNS 反向解析不依赖于用户的 REMOTE_ADDR。
$_SERVER['REMOTE_PORT']	用户机器上连接到 Web 服务器所使用的端口号。
$_SERVER['SCRIPT_FILENAME']	当前执行脚本的绝对路径。
$_SERVER['SERVER_ADMIN']	该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。(如：someone@runoob.com)
$_SERVER['SERVER_PORT']	Web 服务器使用的端口。默认值为 "80"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。
$_SERVER['SERVER_SIGNATURE']	包含了服务器版本和虚拟主机名的字符串。
$_SERVER['PATH_TRANSLATED']	当前脚本所在文件系统（非文档根目录）的基本路径。这是在服务器进行虚拟到真实路径的映像后的结果。
$_SERVER['SCRIPT_NAME']	包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
$_SERVER['SCRIPT_URI']	URI 用来指定要访问的页面。例如 "/index.html"。
-->