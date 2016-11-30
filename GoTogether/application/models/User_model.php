<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct(); // 继承父类的构造函数
        $this->load->database();
    }

    function u_insert($arr) {
        //把传来的数据数组插到user表里
        $this->db->insert('user', $arr);
    }

    function u_del($userName) {
        $this->db->where('userName', $userName);//查找到此用户名的用户信息
        $this->db->delete('user');//删除此id所有信息
    }

    function u_update($userName, $arr) {
        $this->db->where('$userName',$userName); //查找到此用户的用户信息
        $this->db->update('user',$arr);//更新
    }

    function u_select($userName) { // 这里是通过用户名来查找，可以自定义其他字段
        $this->db->where('userName', $userName);
        $this->db->select('*'); //选取全部信息
        $query=$this->db->get('user');
        return $query->result(); //返回值
    }
}