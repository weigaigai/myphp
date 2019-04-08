<?php
/**
 * 应用配置文件
 * 使用数组方式
 * Created by PhpStorm.
 * User: weigaigai
 * Date: 2019/4/8
 * Time: 17:28
 */
return [
    //数据库的连接配置
    'db' => [
        'user' => 'root', //用户名
        'pass' => '123456', //密码
        'dbname' => 'edu', //默认数据库名称
    ],

    //应用的整体配置
    'app' => [
        'default_platform' => 'home', // 默认模板
    ],

    // 前台配置
    'home' => [
        'default_controller' => 'Student', //默认控制器
        'default_action' => 'listAll',  //默认方法
    ],

    // 前台配置
    'admin' => [
        'default_controller' => '', //默认控制器
        'default_action' => '',  //默认方法
    ],
];