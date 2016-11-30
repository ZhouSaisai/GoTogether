<?php
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('user/login');
    }

    public function login(){
        $this->load->view('user/login');
    }

    public function askLogin(){
        $user = $this->user_model->u_select($_POST['userName']);
        //调用User_test模型的u_select方法查询提交的用户名的信息
        if ($user) {
            // 如果此用户存在
            if ($user[0] -> password == $_POST['password']) {
                // 如果提交的密码与正确密码一致，则创建session
                // 载入CI的session库
                $this -> load -> library('session');
                // 把用户ID存入数组
                $arr = array('userName' => $user[0] -> userName);
                //设置session
                $this -> session -> set_userdata($arr);
                return "登陆成功";
            } else {
                return '密码错误';
            }
        } else {
            return '用户不存在';
        }
    }

    public function register(){
        $this->load->view('user/register');
    }

    function askRegister() {
        $this -> load -> model('user_test'); //载入我们之前创建的User_test模型，首字母不用大小
        $arr = array(
            'uname' => $_POST['userName'],
            'upw' => $_POST['password']
        );
        //获取提交的表单内容，=>左边是数据表里面的键名，=>右边是通过name获取的表单值
        $this -> user_test -> u_insert($arr); //调用user_test的u_insert方法插入数据
    }


}