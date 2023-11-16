<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Common_ajax extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->tank_auth->is_logged_in()) {
            redirect('auth/login/');
        }
        $this->load->Model('Remove_records');
    }

    function getProductProductGroup()
    {
        $category_id = $this->input->post('CategoryID');
        if ($category_id > 0) {
            $product_group_list = $this->Common->get_all_info($category_id, TBL_PRODUCT_GROUP, 'CategoryID');
            $data['product_group_list'] = $product_group_list;
            $data['category_list'] = $this->Common->get_list(TBL_CATEGORY, 'CategoryID', 'CategoryName');
            $data['product_type_list'] = $this->Common->get_list(TBL_PRODUCT_TYPE, 'ProductTypeID', 'ProductTypeName');
            $data['color_list'] = $this->Common->get_list(TBL_COLOR, 'ColorID', 'ColorName');
            $data['size_list'] = $this->Common->get_size_list();
            $html = $this->load->view('product_group/all_item', $data, true);
            echo json_encode(array('status' => 'ok', 'data' => $html));
            die();
        }
    }

    //Get Fabrication Cost
    function getFabiricationCost()
    {
        if ($this->input->post()) {
            $response = array("status" => "error", "heading" => "Unknown Error", "message" => "There was an unknown error that occurred. You will need to refresh the page to continue working.");
            $error_element = error_elements();
            $this->form_validation
                ->set_rules('sizeID', 'Size', 'required')
                ->set_rules('cost', 'Cost', 'required')
                ->set_rules('qty', 'Qty', 'required')
                ->set_rules('FabticationID', 'Fabtication', 'required');

            $this->form_validation->set_error_delimiters($error_element[0], $error_element[1]);

            if ($this->form_validation->run()) {
                $FabticationID = $this->input->post('FabticationID');
                $sizeID = $this->input->post('sizeID');
                $qty = $this->input->post('qty');
                $cost = $this->input->post('cost');
                if ($sizeID > 0) {
                    $size_info = $this->Common->get_info($sizeID, TBL_SIZE, 'SizeID');
                    $fabrication_cost = ((($size_info->Height + $size_info->Width) * 2) * $qty * $cost);
                    echo json_encode(array('status' => 'ok', 'fabrication_cost' => $fabrication_cost));
                    die();
                }
            } else {
                $errors = $this->form_validation->error_array();
                $response['error'] = $errors;
            }
            echo json_encode($response);
            die;
        }
    }

    //Get Fabrication Cost
    function getProductTypeDetail()
    {
        if ($this->input->post()) {
            $response = array("status" => "error", "heading" => "Unknown Error", "message" => "There was an unknown error that occurred. You will need to refresh the page to continue working.");
            $error_element = error_elements();
            $this->form_validation
                ->set_rules('ProductTypeID', 'Product Type', 'required');

            $this->form_validation->set_error_delimiters($error_element[0], $error_element[1]);

            if ($this->form_validation->run()) {
                $isColorShown = 0;
                $ProductTypeID = $this->input->post('ProductTypeID');
                $product_type_info = $this->Common->get_info($ProductTypeID, TBL_PRODUCT_TYPE, 'ProductTypeID');
                if(!empty($product_type_info) && $product_type_info->isColor == 1){
                    $isColorShown = 1;
                }
                echo json_encode(array('status' => 'ok', 'isColorShown' => $isColorShown));
                die();
            } else {
                $errors = $this->form_validation->error_array();
                $response['error'] = $errors;
            }
            echo json_encode($response);
            die;
        }
    }

    function getCustomerOldBalance()
    {
        $customer_id = $this->input->post('CustomerID');
        $old_balance = 0;
        if ($customer_id > 0) {
            $customer_info = $this->Common->get_info($customer_id, TBL_CUSTOMER, 'CustomerID');
            $old_balance = $customer_info->PendingBalance;
        }
        echo json_encode(array('status' => 'ok', 'old_balance' => $old_balance));
        die();
    }
}
