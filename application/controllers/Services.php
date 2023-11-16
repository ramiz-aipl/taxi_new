<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Services extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "Services - American Platinum Limousine";
        
        $data['main_content'] = 'services/index';
        $this->load->view('main_content', $data);
    }
    function detail($id)
    {
        $data["extra_js"] = array();
        $data['page_title'] = "Services - American Platinum Limousine";
        
        if($id=='airport'){
            $data['main_content'] = 'services/airport';
        }else{

            $data['main_content'] = 'services/detail';
        }
        $this->load->view('main_content', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */