<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10"><?php echo $page_title; ?></h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:;"><?php echo $page_title; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-6" style="float:left;">
                            <div class="form-group">
                                <label class="form-label" style="color:#4680ff; font-size:18px; font-weight:bold;">User</label>
                                <input type="text" name="" id="" class="form-control" value="<?php echo $users ?>" readonly />
                            </div>
                        </div>
                        <div class="col-sm-6" style="float: left;">
                            <div class="form-group">
                                <label class="form-label" style="color:#4680ff; font-size:18px; font-weight:bold;">Date</label>
                                <input type="text" name="filter_date" id="filter_date" class="form-control date_filter" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-yellow">OVERALL CLIENT</h4>
                                <H4 class="text-muted m-b-0" id="totalclient" style="font-size: 20px;"><?php echo $mntotalinsti ? $mntotalinsti : "0"; ?></h4>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-bar-chart-2 f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-yellow">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-up text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-green">OVERALL AMOUNT+</h4>
                                <h4 class="text-muted m-b-0" id="totalamt" style="font-size: 20px;"><?php echo $mntotalamt ? $mntotalamt : "0"; ?></h4>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-file-text f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-green">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-up text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-red" style="font-size: 13px;">JEEVANDEEP CLIENT</h4>
                                <h6 class="text-muted m-b-0" id="jvclient"><?php echo $jvcountinsti ? $jvcountinsti : "0"; ?></h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-calendar f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-red">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue" style="font-size: 13px;">VIZN CLIENT</h4>
                                <h6 class="text-muted m-b-0" id="viznclient"><?php echo $vzcountinsti ? $vzcountinsti : "0"; ?></h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-thumbs-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue" style="font-size: 11px;">JEEVANDEEP AMOUNT</h4>
                                <h6 class="text-muted m-b-0" id="jvamt"><?php echo $mnjvamt ? $mnjvamt : "0"; ?></h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-thumbs-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue" style="font-size: 13px;">
                                    VIZN AMOUNT</h4>
                                <h6 class= "text-muted m-b-0" id="viznamt"><?php echo $mnvzamt ? $mnvzamt : "0"; ?></h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-thumbs-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"></p>
                            </div>
                            <div class="col-3 text-right">
                                <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>