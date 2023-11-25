<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Our_fleet extends CI_Controller
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
    function details($id)
    {
        $data["extra_js"] = array();
        $data['page_title'] = "Our Fleet - American Platinum Limousine";
        
        if($id=='strtch-limousine'){
            $data['main_content'] = 'our_fleet/strtch_limousine';
        }else if($id=='luxury-suv'){
            $data['main_content'] = 'our_fleet/luxury_suv';
        }else if($id=='luxury-sedan'){
            $data['main_content'] = 'our_fleet/luxury_sedan';
        }else if($id=='party-bus'){
            $data['main_content'] = 'our_fleet/party_bus';
        }else if($id=='special-request'){
            $data['main_content'] = 'our_fleet/special_request';
        }else{
            $data['main_content'] = 'our_fleet/luxury_sedan';
        }
        $this->load->view('main_content', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */