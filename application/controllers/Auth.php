<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login_page()
    {
        $this->load->view('auth/login.php');
    }

}
