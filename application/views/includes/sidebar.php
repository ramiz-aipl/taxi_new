<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="<?php echo DEFAULT_BANK_AVATAR; ?>" alt="" data-src="<?php echo DEFAULT_BANK_AVATAR; ?>" data-src-retina="<?php echo DEFAULT_BANK_AVATAR; ?>" />
                    <div class="user-details">
                        <div id="more-details"><?php echo $this->tank_auth->get_username(); ?> <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><i class="feather icon-user m-r-5"></i>View Profile</li>

                        <li class="list-group-item"><a href="<?php echo base_url("auth/change_password/"); ?>"><i class="feather icon-settings m-r-5"></i>Change Password</a></li>

                        <li class="list-group-item"><a href="<?php echo base_url("auth/logout/"); ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">

                <li class="nav-item start <?php echo ($this->uri->segment(1) == "dashboard" || $this->uri->segment(1) == "") ? "active" : ''; ?>">
                    <a href="<?php echo base_url('dashboard'); ?>" class="nav-link "><span class="pcoded-micon">
                            <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <!-- <li class="nav-item pcoded-hasmenu">
                    <a href="javascript:;" class="nav-link "><span class="pcoded-micon"><img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Masters</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?php echo base_url('category'); ?>">Category</a></li>
                        <li><a href="<?php echo base_url('product-type'); ?>">Product Type</a></li>
                        <li><a href="<?php echo base_url('size'); ?>">Size</a></li>
                        <li><a href="<?php echo base_url('color'); ?>">Color</a></li>
                        <li><a href="<?php echo base_url('fabrication'); ?>">Fabrication</a></li>
                        <li><a href="<?php echo base_url('supplier'); ?>">Supplier</a></li>
                        <li><a href="<?php echo base_url('product-group'); ?>">Product Group</a></li>
                        <li><a href="<?php echo base_url('customer'); ?>">Customer</a></li>
                    </ul>
                </li> -->
                <?php
                $method_nm = ($this->uri->segment(2) == "") ? "index" : $this->uri->segment(2);
                $user_role = $this->tank_auth->get_user_role_id();
                $user_id = $this->tank_auth->get_user_id();
                $menu_open_seq = 1;
                $nav_menu = $this->NavMenu->displayMenu();
                foreach ($nav_menu as $nav_menu_array) {
                    // echo $this->uri->segment(1);die;
                    // echo '<pre>';
                    //                print_r($nav_menu_array);
                    //                die;
                    $mainMenuRole = (isset($nav_menu_array["menu_role"]) && $nav_menu_array["menu_role"] != "") ? explode(",", $nav_menu_array["menu_role"]) : array();

                    if (in_array("$user_role", $mainMenuRole)) {
                        // echo $this->uri->segment(1);die;
                        $class_nm = $nav_menu_array["menu_controller"] == $this->uri->segment(1) ? "active" : "";
                        $class_li_nm = $nav_menu_array["menu_controller"] == $this->uri->segment(1) ? "pcoded-trigger" : "";
                        $main_link = 'javascript:;';
                        if (empty($nav_menu_array["subMenu"]) && !empty($nav_menu_array["menu_link"])) {
                            $main_link = base_url() . $nav_menu_array["menu_link"];
                        }
                        $parent_class = '';
                        if (!empty($nav_menu_array["subMenu"])) {
                            // echo '<span class="arrow "></span>';

                            $parent_class = 'pcoded-hasmenu';
                            foreach ($nav_menu_array["subMenu"] as $sub_arr) {
                                if ($sub_arr["menu_link"] == $this->uri->segment(1)) {
                                    $parent_class .= ' pcoded-trigger';
                                }
                            }
                        } else {
                            $parent_class = '';
                        }
                        echo '<li class="nav-item ' . $parent_class . $class_nm . ' parent_menu_' . $menu_open_seq . '">';
                        echo '<a class="nav-link ' . $class_nm . '" href="' . $main_link . '">';

                        $icn_class = $nav_menu_array["menu_icon"] != '' ? $nav_menu_array["menu_icon"] : "fa-bar-chart-o";
                        echo '<span class="pcoded-micon"><img src="' . base_url() . 'assets/images/icons.png" width="20" height="20"></span>';
                        // echo '<i class="fa ' . $icn_class . '"></i>';
                        echo '<span class="pcoded-mtext">' . $nav_menu_array["title_name"] . '</span>';

                        echo '</a>';
                        if ($nav_menu_array["subMenu"]) {
                            $parent_class = '';
                            if (!empty($nav_menu_array["subMenu"])) {
                                // echo '<span class="arrow "></span>';

                                foreach ($nav_menu_array["subMenu"] as $sub_arr) {
                                    if ($sub_arr["menu_link"] == $this->uri->segment(1)) {
                                        $parent_class = 'pcoded-hasmenu';
                                        $parent_class .= ' pcoded-trigger';
                                    }
                                }
                            } else {
                                $parent_class = '';
                            }
                            if ($parent_class != '') {
                                echo '<ul class="pcoded-submenu" style="display: block;">';
                            } else {
                                echo '<ul class="pcoded-submenu" style="display: none;">';
                            }
                            foreach ($nav_menu_array["subMenu"] as $sub_arr) {
                                $icn_class = $sub_arr["menu_icon"] != '' ? $sub_arr["menu_icon"] : "fa-bar-chart-o";
                                $subMenuRole = (isset($sub_arr['menu_role']) && $sub_arr['menu_role'] != "") ? explode(",", $sub_arr['menu_role']) : "";
                                if (in_array("$user_role", $subMenuRole)) {
                                    if ($method_nm != "index") :
                                        $sub_selected = $this->uri->segment(1);
                                    else :
                                        $sub_selected = $this->uri->segment(1);
                                    endif;
                                    $class_nm = ($sub_arr["menu_link"] == $sub_selected) ? "active" : "";
                                    if ($class_nm == 'active') {
                ?>
                                        <script>
                                            // $('.parent_menu_' + <?php echo $menu_open_seq; ?>).addClass('open');
                                            // $('.parent_menu_' + <?php echo $menu_open_seq; ?>).addClass('active');
                                        </script>
                <?php
                                    }
                                    echo '<li class="' . $class_nm . '"><a href="' . base_url($sub_arr['menu_link']) . '"><span class="pcoded-micon"><img src="' . base_url() . 'assets/images/icons.png" width="20" height="20"></span>' . $sub_arr['menu_title'] . '</a></li>';
                                }
                            }
                            echo "</ul>";
                        }
                        echo "</li>";
                    }
                    $menu_open_seq++;
                }
                ?>

                <!-- <ul class="nav pcoded-inner-navbar ">

                    <li class="nav-item start <?php echo ($this->uri->segment(1) == "dashboard" || $this->uri->segment(1) == "") ? "active" : ''; ?>">
                        <a href="<?php echo base_url('dashboard'); ?>" class="nav-link "><span class="pcoded-micon">
                                <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:;" class="nav-link "><span class="pcoded-micon"><img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Masters</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?php echo base_url('category'); ?>">Category</a></li>
                            <li><a href="<?php echo base_url('product-type'); ?>">Product Type</a></li>
                            <li><a href="<?php echo base_url('size'); ?>">Size</a></li>
                            <li><a href="<?php echo base_url('color'); ?>">Color</a></li>
                            <li><a href="<?php echo base_url('fabrication'); ?>">Fabrication</a></li>
                            <li><a href="<?php echo base_url('supplier'); ?>">Supplier</a></li>
                            <li><a href="<?php echo base_url('product-group'); ?>">Product Group</a></li>
                            <li><a href="<?php echo base_url('customer'); ?>">Customer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item start <?php echo ($this->uri->segment(1) == "purchase") ? "active" : ''; ?>">
                        <a href="<?php echo base_url('purchase'); ?>" class="nav-link "><span class="pcoded-micon">
                                <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Purchase</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:;" class="nav-link "><span class="pcoded-micon"><img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Quotation</span></a>
                        <ul class="pcoded-submenu">
                            <li>
                                <a href="<?php echo base_url('quotation'); ?>" class="nav-link "><span class="pcoded-micon">
                                        <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Quotation</span>
                                </a>

                            </li>
                            <li>
                                <a href="<?php echo base_url('fabrication-quotation'); ?>" class="nav-link "><span class="pcoded-micon">
                                        <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Fabrication Quotation</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item start <?php echo ($this->uri->segment(1) == "invoice") ? "active" : ''; ?>">
                        <a href="<?php echo base_url('invoice'); ?>" class="nav-link "><span class="pcoded-micon">
                                <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item start <?php echo ($this->uri->segment(1) == "expenses") ? "active" : ''; ?>">
                        <a href="<?php echo base_url('expenses'); ?>" class="nav-link "><span class="pcoded-micon">
                                <img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Expenses</span>
                        </a>
                    </li>

                    <li class="nav-item pcoded-hasmenu ">
                        <a href="javascript:;" class="nav-link "><span class="pcoded-micon"><img src="<?php echo base_url(); ?>assets/images/icons.png" width="20" height="20"></span><span class="pcoded-mtext">Reports</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?php echo base_url('stock-report'); ?>">Stock Report</a></li>
                            <li><a href="<?php echo base_url('ACR-report'); ?>">Purchase Report</a></li>
                            <li><a href="<?php echo base_url('ACR-report'); ?>">Income Report</a></li>
                        </ul>
                    </li>


                </ul> -->
        </div>
    </div>
</nav>