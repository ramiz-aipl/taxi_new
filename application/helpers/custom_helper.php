<?php

function success_elements() {
    return array('<div class="alert alert-block alert-success fade in"><button type="button" class="close close-sm" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>');
}

function error_elements() {
    return array('<div class="alert alert-block alert-danger fade in"><button type="button" class="close close-sm" data-dismiss="alert"><i class="fa fa-times"></i></button>', '</div>');
}

function add_edit_form() {
    echo '<div id="add_edit_form" style="display: none; margin-bottom:120px;"><div id="display_update_form"></div></div>';
}

function randomNumber() {
    return rand(111,9999);
}


function upload_file($post_file_name, $inner_dir, $old_file_name = '') {

    $ci = & get_instance();

    $upload_path = UPLOAD_DIR . $inner_dir;

    if (!file_exists(UPLOAD_DIR)) : mkdir(UPLOAD_DIR, 0777, TRUE);
    endif;
    if (!file_exists($upload_path)) : mkdir($upload_path, 0777, TRUE);
    endif;

    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = '*';
    $config['max_width'] = 0;
    $config['max_height'] = 0;
    $config['max_size'] = 0;
    $config['encrypt_name'] = TRUE;

    $ci->load->library('upload', $config);

    if (isset($_FILES[$post_file_name]["name"]) && $_FILES[$post_file_name]["name"] != "") {
        if ($ci->upload->do_upload($post_file_name)) {
            $upload_data = $ci->upload->data();
            if (!empty($old_file_name)) {

                $file_path = UPLOAD_DIR . $inner_dir . "/" . $old_file_name;
                if ($file_path != "" && file_exists($file_path)):
                    unlink($file_path);
                endif;
            }

            return $upload_data;
        } else {
            return $ci->upload->display_errors();
        }
    }
    return FALSE;
}

function delete_file($inner_dir, $old_file_name = '') {

    $ci = & get_instance();

    $upload_path = UPLOAD_DIR . $inner_dir;

    if (!empty($old_file_name)) {

        $file_path = UPLOAD_DIR . $inner_dir . "/" . $old_file_name;
        if ($file_path != "" && file_exists($file_path)):
            unlink($file_path);
        endif;
        return TRUE;
    }

    return FALSE;
}

function one_singal_notification($playerIds, $msg) {

    $key = ''; // add one single key
    $message = $msg;

    $title = '';
    $ids = array($playerIds);
    $content = array(
        "en" => $message,
        "title" => $title,
        "message" => $msg,
    );
    $fields = array(
        'app_id' => "", // add one single app_id
        // 'included_segments' => array('All'),
        'large_icon' => "ic_launcher.png",
        'small_icon' => "ic_launcher_small.png",
        'include_player_ids' => $ids,
        'contents' => $content
    );

    $fields = json_encode($fields);
    //var_dump($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ' . $key));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    curl_close($ch);
    //print("\nJSON sent:\n");
    //print($response);
    return $response;
}

function banner_active_row($id) {
    $ci = & get_instance();
    $action = "";
    $IsActive = $ci->Common->get_info($id, TBL_BANNER, 'BannerID','BannerType = "H"', 'isActive');
    if ($IsActive) {
        if ($IsActive->isActive == 1) {
            $st = "checked";
        } else {
            $st = "";
        }
        $action = <<<EOF
            <div class="tooltip-top">
                <label class="switch banner_feature" data-id="{$id}" data-control="banner">
                    <input type="checkbox" {$st}>
                    <span class="slider round"></span>
                </label>
            </div>
EOF;
    }
    return $action;
}

function order_active_row($id) {
    $ci = & get_instance();
    $action = "";
    $IsActive = $ci->Common->get_info($id, TBL_ORDERHDR, 'OrderHdrID', FALSE, 'isActive');
    if ($IsActive) {
        if ($IsActive->isActive == 1) {
            $st = "checked";
        } else {
            $st = "";
        }
        $action = <<<EOF
            <div class="tooltip-top">
                <label class="switch banner_feature" data-id="{$id}" data-control="notesorder">
                    <input type="checkbox" {$st}>
                    <span class="slider round"></span>
                </label>
            </div>
EOF;
    }
    return $action;
}

function orderform_active_row($id) {
    $ci = & get_instance();
    $action = "";
    $IsActive = $ci->Common->get_info($id, TBL_ORDERHDR, 'OrderHdrID', FALSE, 'isActive');
    if ($IsActive) {
        if ($IsActive->isActive == 1) {
            $st = "checked";
        } else {
            $st = "";
        }
        $action = <<<EOF
            <div class="tooltip-top">
                <label class="switch banner_feature" data-id="{$id}" data-control="notesorder">
                    <input type="checkbox" {$st}>
                    <span class="slider round"></span>
                </label>
            </div>
EOF;
    }
    return $action;
}

function viznform_active_row($id) {
    $ci = & get_instance();
    $action = "";
    $IsActive = $ci->Common->get_info($id, TBL_VIZNORDERHDR, 'OrderHdrID', FALSE, 'isActive');
    if ($IsActive) {
        if ($IsActive->isActive == 1) {
            $st = "checked";
        } else {
            $st = "";
        }
        $action = <<<EOF
            <div class="tooltip-top">
                <label class="switch banner_feature" data-id="{$id}" data-control="viznorder">
                    <input type="checkbox" {$st}>
                    <span class="slider round"></span>
                </label>
            </div>
EOF;
    }
    return $action;
}


function master_active_row($id) {
    $ci = & get_instance();
    $action = "";
    $IsActive = $ci->Common->get_info($id, TBL_MARKETPLACE_MASTER, 'MarketID', FALSE, 'isActive');
    if ($IsActive) {
        if ($IsActive->isActive == 1) {
            $st = "checked";
        } else {
            $st = "";
        }
        $action = <<<EOF
            <div class="tooltip-top">
                <label class="switch banner_feature" data-id="{$id}" data-control="master">
                    <input type="checkbox" {$st}>
                    <span class="slider round"></span>
                </label>
            </div>
EOF;
    }
    return $action;
}

function add_detail_row($id) {
        $html = '<div class="tooltip-top">
                <a data-original-title="Marketplace Services" data-placement="top" data-toggle="tooltip" href="javascript:;" class="btn btn-xs btn-default btn-equal btn-mini service_details" data-id="'.$id.'"><i class="fa fa-info-circle"></i></a>
            </div>';

        return $html;
}

function invoice_subjects($data)
{
    $ci = & get_instance();
    return $ci->Common->get_all_info(1, TBL_SUBJECTNEW,1,'SubjectID IN ('.$data.')');
    
}

function number_to_word(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    // $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') ;
}


function auction_detail_row($EventID)
{
    $ci = &get_instance();
    $join = array(
        array("table" => TBL_STATE . " st", "on" => "e.StateID=st.StateID", "type" => "LEFT"),
        array("table" => TBL_CITY . " ct", "on" => "e.CityID = ct.CityID", "type" => "LEFT"),
    );
    $event_details = $ci->Common->get_info($EventID, TBL_EVENT . ' e', 'AuctionID', '', '*', $join);
    $html = '';
    if (!empty($event_details)) {
        $html .= 'Event Code : ' . $event_details->EventCode . '<br>';
        $html .= 'Event Name : ' . $event_details->EventName . '<br>';
        // $html .= 'State Name : ' . $event_details->StateName . '<br>';
        // $html .= 'City Name : ' . $event_details->CityName . '<br>';
        // $html .= 'Start Date : ' . $event_details->StartTime . '<br>';
        // $html .= 'End Date : ' . $event_details->EndTime . '<br>';
        // $html .= 'No of Vehicle : ' . $event_details->NumberOfVehical . '<br>';
        return $html;
    }
    return $html;
}

function auction_date_row($EventID, $dateField = 'start')
{
    $ci = &get_instance();
    $join = array(
        array("table" => TBL_STATE . " st", "on" => "e.StateID=st.StateID", "type" => "LEFT"),
        array("table" => TBL_CITY . " ct", "on" => "e.CityID = ct.CityID", "type" => "LEFT"),
    );
    $event_details = $ci->Common->get_info($EventID, TBL_EVENT . ' e', 'AuctionID', '', '*', $join);
    $html = '';
    if (!empty($event_details)) {
        if ($dateField == 'end') {
            $html .= date('d-M-Y', strtotime($event_details->EndTime)) . '<br>';
            $html .= date('h:i A', strtotime($event_details->EndTime));
        } else if ($dateField == 'start') {
            $html .= date('d-M-Y', strtotime($event_details->StartTime)) . '<br>';
            $html .= date('h:i A', strtotime($event_details->StartTime));
        }
        return $html;
    }
    return $html;
}


function car_add_active_row($event_id)
{
    $ci = &get_instance();
    $event_info = $ci->Common->get_info($event_id, TBL_EVENT, 'AuctionID', FALSE, '*');
    //    if($event_info->isApproved == 1){
    $html = '';
    $url = base_url() . 'car?auction_id=' . base64_encode($event_id);
    if ($event_id > 0) {
        $html = '<div class="tooltip-top">
                    <b>' . $event_info->NumberOfVehical . '</b>  <a data-original-title="Add Auction Car" data-placement="top" data-toggle="tooltip" href="' . $url . '" class="btn btn-xs btn-default btn-equal btn-mini" style="background-color: white;padding-left: 0px !important;padding-top: 0px !important;padding-bottom: 5px !important;font-size: 11px !important;" ><b style="font-size:17px;"></b> <i class="fa fa-plus"></i></a>                
                </div>';
    }
    return $html;
    //    }
}
function bank_car_add_active_row($event_id)
{
    //    $ci = & get_instance();
    //    $event_info = $ci->Common->get_info($event_id, TBL_EVENT, 'AuctionID', FALSE, 'isApproved');
    //    if($event_info->isApproved == 1){
    $html = '';
    $url = base_url() . 'car?auction_id=' . base64_encode($event_id) . '&type=' . base64_encode('bank_car');
    if ($event_id > 0) {
        $html = '<div class="tooltip-top">
                    <a data-original-title="Add Auction Car" data-placement="top" data-toggle="tooltip" href="' . $url . '" class="btn btn-xs btn-default btn-equal btn-mini"  ><i class="fa fa-eye"></i></a>                
                </div>';
    }
    return $html;
    //    }
}


function car_image_row($default_image, $car_id)
{
    $ci = &get_instance();
    if ($default_image != '' && file_exists(ROOT_URL . UPLOAD_DIR_NAME . CAR_DIR . $default_image)) {

        $url = BASE_URL . UPLOAD_DIR_NAME . CAR_DIR . $default_image;
    } else {
        $setting = $ci->Common->get_info(1, TBL_SETTING, 'ID');
        $url = BASE_URL . UPLOAD_DIR_NAME . CAR_DIR . $setting->CarDefaultImage;
    }
    $action = '<img src="' . $url . '" width="80" height="60">';
    return $action;
}


function get_car_noc_form($car_id, $type)
{
    $ci = &get_instance();
    return $old_code = $ci->Common->get_info($car_id, TBL_T_CAR_NOC, 'CarID', 'Type = "' . $type . '"', '*');
}

function live_auction_monitor_car_detail_row($CarID)
{
    $ci = &get_instance();
    $join = array(
        array("table" => TBL_EVENT . " e", "on" => "e.AuctionID=c.EventID", "type" => "LEFT"),
        array("table" => TBL_M_MAKE . " make", "on" => "c.MakeID=make.MakeID", "type" => "LEFT"),
        array("table" => TBL_VEHICLE_TYPE . " vt", "on" => "c.VehicleTypeID=vt.VehicalTypeID", "type" => "LEFT"),
        array("table" => TBL_CLIENT . " client", "on" => "e.ClientID=client.ClientID", "type" => "LEFT"),
    );
    $car_details = $ci->Common->get_info_new($CarID, TBL_T_CARS . ' c', 'c.CarID', false, '*', $join);
    // echo $ci->db->last_query();die;
    // echo '<pre>';
    // print_r($car_details);die;
    $html = '';
    if (!empty($car_details)) {
        $html = 'Title :' . $car_details->MakeName . ' ' . $car_details->Model . '<br>';
        $html .= 'Reg
         No :' . $car_details->CarNo . '<br>';
        $html .= 'LAN :' . $car_details->LAN . '<br>';
        $html .= 'Make Year :' . $car_details->MfgYear . '<br>';
        $html .= 'Auction ID :' . str_pad($car_details->CarID, 6, '0', STR_PAD_LEFT) . '<br>';
        // $html .= 'Contact No :'. $car_details->MfgYear.'<br>';
    }
    $car_detail_url = base_url('car/view_details/' . base64_encode($CarID));
    return '<a href="' . $car_detail_url . '" target="_blank">' . $html . '</a>';
}

function get_bid_betterment_price($BidID)
{
    $ci = &get_instance();
    $bid_details = $ci->Common->get_info($BidID, TBL_BID, 'BidID');
    if (!empty($bid_details)) {
        if ($bid_details->isBetterMenPrice == 1) {
            $last_user_bid_details = $ci->Common->get_info($bid_details->CarID, TBL_BID . " bid", "bid.CarID", ' bid.UserID=' . $bid_details->UserID, '*',  false, false, array('field' => 'bid.BidID', 'order' => 'DESC'), false, 1, 1);
            $html = ' Last Bid : ' . $last_user_bid_details->BidAmount . '<br>' . ' Betterment Price : <b><span class="text-warning">' . $bid_details->BidAmount . '</span></b>';
            return $html;
        } else {
            return $bid_details->BidAmount;
        }
    }
}


function get_auction_code($eventCode)
{
    $ci = &get_instance();
    $old_code = $ci->Common->get_info(1, TBL_EVENT, 1, 'SUBSTRING(EventCode FROM 1 FOR CHAR_LENGTH(EventCode) - 3) = "' . $eventCode . '"', '*', false, false, array('field' => 'AuctionID', 'order' => 'DESC'));
    if (!empty($old_code)) {

        // return $old_code->EventCode.str_pad((((int)substr($eventCode, -3))+1),3,'0',STR_PAD_LEFT);
        $event_code = $eventCode . str_pad((((int)substr($old_code->EventCode, -3)) + 1), 3, '0', STR_PAD_LEFT);
        // print_r($event_code);die;
        return $event_code;
    } else {
        return $eventCode . '001';
    }
}

/* Convert Amount In Words 25-01-2023 */
function convert_amount_in_words($number)
{
    $no = floor($number);
    $point = round($number - $no, 2) * 100;
    $hundred = null;
    $digits_1 = strlen($no);
    $i = 0;
    $str = array();
    $words = array(
        '0' => '', '1' => 'one', '2' => 'two',
        '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
        '7' => 'seven', '8' => 'eight', '9' => 'nine',
        '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
        '13' => 'thirteen', '14' => 'fourteen',
        '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
        '18' => 'eighteen', '19' => 'nineteen', '20' => 'twenty',
        '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
        '60' => 'sixty', '70' => 'seventy',
        '80' => 'eighty', '90' => 'ninety'
    );
    $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
    while ($i < $digits_1) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += ($divider == 10) ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str[] = ($number < 21) ? $words[$number] .
                " " . $digits[$counter] . $plural . " " . $hundred
                :
                $words[floor($number / 10) * 10]
                . " " . $words[$number % 10] . " "
                . $digits[$counter] . $plural . " " . $hundred;
        } else $str[] = null;
    }
    $str = array_reverse($str);
    $result = implode('', $str);
    $points = ($point) ?
        "." . $words[$point / 10] . " " .
        $words[$point = $point % 10] : '';
    echo ucwords($result) . ucwords($points);
}



?>