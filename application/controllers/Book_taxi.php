<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Book_taxi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        
    }

    function index()
    {
        $data["extra_js"] = array();
        $data['page_title'] = "American Platinum Limousine Taxy";
        
        $data['main_content'] = 'pages/book_taxi';
        $this->load->view('main_content', $data);
    }

    function filterdate()
    {
        $date = $this->input->post('value');
        $userid = $this->tank_auth->get_user_id();
        $roletype = $this->Common->get_all_info($userid, TBL_USERS, 'id');
        $role = $roletype[0]->RoleID;

        if ($role == '2') {
            $jvorderhdr = $this->Common->get_all_info($userid, TBL_ORDERHDR, 'UserID', 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"');
        } else {
            $jvorderhdr = $this->Common->get_all_info(1, TBL_ORDERHDR, 1, 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"');
        }

        if (!empty($jvorderhdr)) {

            foreach ($jvorderhdr as $key => $value) {
                $insti[] = $value->InstituteID;
            }

            $in =  implode(',', $insti);
            $instiq = $this->Common->get_all_info('', TBL_INSTITUTE, '', 'InstituteID IN (' . $in . ')');
            $jvcountinsti = count($instiq);
        }

        if ($role == '2') {
            $vzorderhdr = $this->Common->get_all_info($userid, TBL_VIZNORDERHDR, 'UserID', 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"');
        } else {
            $vzorderhdr = $this->Common->get_all_info(1, TBL_VIZNORDERHDR, 1, 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"');
        }
        if (!empty($vzorderhdr)) {
            foreach ($vzorderhdr as $key => $value) {
                $inst[] = $value->InstituteID;
            }
            $inn =  implode(',', $inst);
            $vninsti = $this->Common->get_all_info('', TBL_VIZNINSTITUTE, '', 'InstituteID IN (' . $inn . ')');
            $vzcountinsti = count($vninsti);
        }

        $totalclient = $jvcountinsti + $vzcountinsti;

        if ($role == '2') {
            $mnnjvamt = $this->Common->get_all_info(1, TBL_ORDERHDR, 1, 'UserID ="' . $userid . '" AND DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"', 'SUM(OrderAmt) as amount');
            $mnjvamt = $mnnjvamt[0]->amount;
        } else {
            $mnnjvamt = $this->Common->get_all_info(1, TBL_ORDERHDR, 1, 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"', 'SUM(OrderAmt) as amount');
            $mnjvamt = $mnnjvamt[0]->amount;
        }

        if ($role == '2') {
            $mnnvzamt = $this->Common->get_all_info(1, TBL_VIZNORDERHDR, 1, 'UserID ="' . $userid . '" AND DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"', 'SUM(OrderAmt) as amount');
            $mnvzamt = $mnnvzamt[0]->amount;
        } else {
            $mnnvzamt = $this->Common->get_all_info(1, TBL_VIZNORDERHDR, 1, 'DATE_FORMAT(CreatedOn,"%Y-%m-%d")="' . $date . '"', 'SUM(OrderAmt) as amount');
            $mnvzamt = $mnnvzamt[0]->amount;
        }

        $totalamt = $mnjvamt + $mnvzamt;

        echo json_encode(array('status' => 'ok', 'jvinsti' => $jvcountinsti, 'vizninsti' => $vzcountinsti, 'totalclient' => $totalclient, 'jvamt' => $mnjvamt, 'viznamt' => $mnvzamt, 'totalamt' => $totalamt));
        die();
    }

    function filteruser()
    {
        $user = $this->input->post('value');

        $jvorderhdr = $this->Common->get_all_info($user, TBL_ORDERHDR, 'UserID');
        if (!empty($jvorderhdr)) {

            foreach ($jvorderhdr as $key => $value) {
                $insti[] = $value->InstituteID;
            }

            $in =  implode(',', $insti);
            $instiq = $this->Common->get_all_info('', TBL_INSTITUTE, '', 'InstituteID IN (' . $in . ')');
            $jvcountinsti = count($instiq);
        }

        $vzorderhdr = $this->Common->get_all_info($user, TBL_VIZNORDERHDR, 'UserID');
        if (!empty($vzorderhdr)) {
            foreach ($vzorderhdr as $key => $value) {
                $inst[] = $value->InstituteID;
            }
            $inn =  implode(',', $inst);
            $vninsti = $this->Common->get_all_info('', TBL_VIZNINSTITUTE, '', 'InstituteID IN (' . $inn . ')');
            $vzcountinsti = count($vninsti);
        }

        $totalclient = $jvcountinsti + $vzcountinsti;


        $mnnjvamt = $this->Common->get_all_info(1, TBL_ORDERHDR, 1, 'UserID ="' . $user . '"', 'SUM(OrderAmt) as amount');
        $mnjvamt = $mnnjvamt[0]->amount;

        $mnnvzamt = $this->Common->get_all_info(1, TBL_VIZNORDERHDR, 1, 'UserID ="' . $user . '"', 'SUM(OrderAmt) as amount');
        $mnvzamt = $mnnvzamt[0]->amount;

        $totalamt = $mnjvamt + $mnvzamt;

        echo json_encode(array('status' => 'ok', 'jvinsti' => $jvcountinsti, 'vizninsti' => $vzcountinsti, 'totalclient' => $totalclient, 'jvamt' => $mnjvamt, 'viznamt' => $mnvzamt, 'totalamt' => $totalamt));
        die();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */