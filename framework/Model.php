<?php
/**
 * 公共模型类
 * 完成数据库连接和一些公共方法
 * Created by PhpStorm.
 * User: weigaigai
 * Date: 2019/4/8
 * Time: 16:11
 */

class Model
{
    protected $db = null;  // 数据库连接对象

    public $data = null; // 当前表中数据

    public function __construct()
    {
        $this->init();  // 完成数据库连接
    }

    private function init()
    {
        $dbConfig = [
            'user' => 'root',
            'pass' => '123456',
            'dbname' => 'edu',
        ];

        // 用自定义连接配置覆盖默认参数
        $this->db = Db::getInstance($dbConfig);
    }

    // 获取全部数据
    public function getAll()
    {
        $sql = "SELECT * FROM student";
        return $this->data = $this->db->fetchAll($sql);
    }

    // 获取单数据
    public function get($id)
    {
        $sql = "SELECT * FROM student WHERE id={$id}";
        return $this->data = $this->db->fetch($sql);
    }
}