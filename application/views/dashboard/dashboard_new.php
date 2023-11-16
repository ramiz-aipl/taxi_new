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
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red" style="color: #b4e1e4 !important;"><?php echo ($uploaded_auction) ? $uploaded_auction : 0; ?></h4>
                        <h6 class="text-muted m-b-0">Total Glass</h6>
                    </div>
                    <div class="col-4 text-right">
                        <!-- <i class="feather icon-calendar f-28"></i> -->
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red" style="background-color: #b4e1e4 !important;">
                <div class="row align-items-center">
                    <div class="col-9">
                        <!-- <p class="text-white m-b-0">% change</p> -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green" style="color: #94b7d9 !important;"><?php echo ($live_auction) ? $live_auction : 0; ?></h4>
                        <h6 class="text-muted m-b-0">Fabrication Earning</h6>
                    </div>
                    <div class="col-4 text-right">
                        <!-- <i class="feather icon-thumbs-down f-28"></i> -->
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green" style="background-color: #94b7d9 !important;">
                <div class="row align-items-center">
                    <div class="col-9">
                        <!-- <p class="text-white m-b-0">% change</p> -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- <i class="feather icon-trending-down text-white f-16"></i> -->
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-yellow" style="color: #58aed8 !important;"><?php echo ($upcoming_auction) ? $upcoming_auction : 0; ?></h4>
                        <h6 class="text-muted m-b-0">Total Orders</h6>
                    </div>
                    <div class="col-4 text-right">
                        <!-- <i class="feather icon-bar-chart-2 f-28"></i> -->
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-yellow" style="background-color: #58aed8 !important;">
                <div class="row align-items-center">
                    <div class="col-9">
                        <!-- <p class="text-white m-b-0">% change</p> -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- <i class="feather icon-trending-up text-white f-16"></i> -->
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
