<?php
/**
 * 前端控制器，入口文件功能，请求分发器
 * Created by PhpStorm.
 * User: weigaigai
 * Date: 2019/4/8
 * Time: 13:06
 */
//导入框架的基础类
require './framework/Base.php';
//实例化框架类
$app = new Base();
//让框架跑起来
$app->run();
