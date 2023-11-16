<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Remove extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->tank_auth->is_logged_in()) {
            redirect('auth/login/');
        }
        $this->load->model('Remove_records');
        if ($this->input->post('pass') && !empty($this->input->post('pass'))):
            if (!$this->check_pass($this->input->post('pass'))):
                $response = array('status' => 'error', 'message' => 'Password not matched.');
                $this->response($response);
            endif;
        else:
            $response = array('status' => 'error', 'message' => 'Password enter valid password.');
            $this->response($response);
        endif;
    }

    function check_pass($password) {
        $user = $this->users->get_user_by_username($this->tank_auth->get_username());
        if (count((array)$user) > 0):
            $hasher = new PasswordHash(
                    $this->config->item('phpass_hash_strength', 'tank_auth'), $this->config->item('phpass_hash_portable', 'tank_auth'));
            if ($hasher->CheckPassword($password, $user->password)):
                return TRUE;
            endif;
        endif;

        return FALSE;
    }

    function category($pid = 0, $where = 'CategoryID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_CATEGORY);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function product_type($pid = 0, $where = 'ProductTypeID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_PRODUCT_TYPE);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function size($pid = 0, $where = 'SizeID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_SIZE);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function color($pid = 0, $where = 'ColorID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_COLOR);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function fabrication($pid = 0, $where = 'FabricationID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_FABRICATION);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function supplier($pid = 0, $where = 'SupplierID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_SUPPLIER);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function employees($pid = 0, $where = 'id') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_USERS);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function customer($pid = 0, $where = 'CustomerID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_CUSTOMER);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function quotation($pid = 0, $where = 'QuotationID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_QUOTATION);
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_QUOTATION_DTL);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function fabrication_quotation($pid = 0, $where = 'QuotationID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_QUOTATION);
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_QUOTATION_DTL);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    function expenses($pid = 0, $where = 'ID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_EXPENSES);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function notesorder($pid = 0, $where = 'OrderHdrID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $getImages = $this->Common->get_info($id, TBL_ORDERHDR,'OrderHdrID');
            $path = UPLOAD_DIR.ORDER.$getImages->PaymentScreenshot;
            @unlink($path);
            // $insti = $getImages->InstituteID;
            // $Images = $this->Common->get_info($insti, TBL_INSTITUTE,'InstituteID');
            // $instipath = UPLOAD_DIR.INSTITUTE.$Images->InstituteLogo;
            // @unlink($path);            
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_ORDERHDR);
            $data_detail_romove = $this->Remove_records->remove_data($id,$where,TBL_ORDERDTL);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function viznorder($pid = 0, $where = 'OrderHdrID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $viznimages = $this->Common->get_info($id, TBL_VIZNORDERHDR,'OrderHdrID');
            $path = UPLOAD_DIR.ORDER.$viznimages->PaymentScreenshot;
            @unlink($path);
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_VIZNORDERHDR);
            $data_detail_romove = $this->Remove_records->remove_data($id,$where,TBL_VIZNORDERDTL);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }


    function board($pid = 0, $where = 'BoardID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_BOARD);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function medium($pid = 0, $where = 'MediumID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_MEDIUM);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function standard($pid = 0, $where = 'StandardID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_STANDARD);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function subject($pid = 0, $where = 'SubjectID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_SUBJECT);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function role($pid = 0, $where = 'RoleID') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_ROLE);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }

    function user($pid = 0, $where = 'id') {
        $id = ($pid > 0) ? $pid : (($this->input->post('id'))?$this->input->post('id'):0);
        if ($id > 0):
            $data_remove = $this->Remove_records->remove_data($id, $where, TBL_USERS);
        
            if($pid > 0):
                return ($data_remove)?TRUE:FALSE;
            else:
                $response = ($data_remove)?array('status' => 'ok', 'message' => 'Details removed successfully.!'):array('status' => 'ok', 'message' => 'Details not removed successfully.!');
                $this->response($response);
            endif;
            
        endif;
    }
    
    function response($response) {
        echo json_encode($response);
        die;
    }

}