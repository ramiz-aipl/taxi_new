<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Polo_team extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "The Polo Team - Nasr Polo";
        
        $data['main_content'] = 'pages/polo_team';
        $this->load->view('main_content', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */