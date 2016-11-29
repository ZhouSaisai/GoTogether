<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_user()
    {
            $query = $this->db->get('user');
            return $query->result_array();
    }

    public function set_user()
    {
        $this->load->helper('url');

        $data = array(
            'userName' => $this->input->post('userName'),
            'password' => $this->input->post('password')
        );

        return $this->db->insert('user', $data);
    }
}