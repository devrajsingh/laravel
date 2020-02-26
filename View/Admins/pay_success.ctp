<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device, initial-scale-1"> 
        <title> Transaction Page</title>
        <!-- bootstrap css liking -->
        
        <?php echo $this->Html->css('bootstrap.min');?>
        <style type="text/css">
            .div_padding{padding-left: 0px !important; padding-right: 0px !important; }
            .main_div_w{width: 700px !important; margin: 100px auto 0; height: 400px;}
            .bdr{border: 1px solid red;}
            .bg_clr01{
                background: gray none repeat scroll 0 0;
                height: 400px;
                padding-left: 30px;
                padding-right: 30px;
            }
            .inner_div_h_w{
                background: #fff none repeat scroll 0 0;
                border-radius: 15px;
                height: 300px;
                margin: 50px 0;
                box-shadow: 2px 1px 10px #f8f8ff;
            }
            
            .Transaction_fail{color: red; text-transform: capitalize; font-weight: bold;}
            
            .t_id_css{color: #3D3D3D; font-size: 16px;}
            .m_t_b_spc01{margin: 15px 0;}
            

            /* media query */
            @media (min-width: 200px) and (max-width: 499px){
                .main_div_w{width: 100% !important;}
                .cross_img{margin-top: -15px; height: 60px;}
                .top_text_spc01{margin-top: 10px; width: 100% !important; text-align: center;}
                .Transaction_fail{ font-size: 18px;}
                .m_top_common_div{margin-top: 20px;}
                .cross_img_div{width: 100% !important;}
                .colon{width: 20% !important;}
                .t_id_w01{width: 80% !important;}
                .t_id_w02{width: 100% !important;}
                .inner_div_h_w{height: auto !important; padding-bottom: 15px;}
                .bg_clr01{height: auto !important; }
            }
            @media (min-width: 500px) and (max-width: 767px){
                .main_div_w{width: 460px !important;}
                .cross_img{margin-top: -15px; height: 60px;}
                .top_text_spc01{margin-top: 10px;}
                .Transaction_fail{ font-size: 22px;}
                .m_top_common_div{margin-top: 30px;}
            }
            @media (min-width: 768px) {
                .main_div_w{width: 700px !important;}
                .center_tag{float: right !important;}
                .cross_img{margin-top: -30px; height: 100px;}
                .top_text_spc01{margin-top: 15px;}
                .Transaction_fail{ font-size: 32px;}
                .m_top_common_div {
                    margin-top: 50px;
                    padding-left: 45px !important;
                    padding-right: 45px !important;
                }
            }
        </style>
    </head>
<body>
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div_padding">
            <div class="main_div_w">
                <div class="col-xs-12 col-sm-12 bg_clr01">
                    <div class="col-xs-12 col-sm-12 div_padding inner_div_h_w">
                        <div class="col-xs-12 col-sm-12 div_padding">
                            <div class="col-xs-12 col-sm-12 div_padding"style="display:none;" >
                                <div class="col-xs-3 col-sm-3 cross_img_div">
                                    <center class="center_tag">
                                        <img src="<?php echo site_url;?>img/wrong.png" alt="img" class="img-responsive cross_img" style="">
                                    </center>
                                </div>
                                <div class="col-xs-7 col-sm-9 top_text_spc01">
                                    <span class="Transaction_fail">Transaction Failed</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 div_padding">
                                <div class="col-xs-3 col-sm-3 cross_img_div">
                                    <center class="center_tag">
                                        <img src="<?php echo HTTP_ROOT;?>img/currect.png" alt="img" class="img-responsive cross_img" style="">
                                    </center>
                                </div>
                                <div class="col-xs-7 col-sm-9 top_text_spc01">
                                    <span class="Transaction_fail" style="color: green; ">Transaction Successfully</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 m_top_common_div div_padding">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-xs-5 col-sm-5 t_id_w01">
                                        <span class="t_id_css">Transaction Id</span>
                                    </div>
                                    <div class="col-xs-1 col-sm-1 colon">
                                        <span class="t_id_css">:</span>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 t_id_w02">
                                        <span class="t_id_css" style="word-wrap:break-word;"><?php echo $view_transaction['Transaction']['transaction_id'];?></span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 m_t_b_spc01">
                                    <div class="col-xs-5 col-sm-5 t_id_w01">
                                        <span class="t_id_css">Amount</span>
                                    </div>
                                    <div class="col-xs-1 col-sm-1 colon">
                                        <span class="t_id_css">:</span>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 t_id_w02">
                                        
                                        <span class="t_id_css"><?php echo $view_transaction['Transaction']['amount']." Rs";?></span>
                                       
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12">
                                    <div class="col-xs-5 col-sm-5 t_id_w01">
                                        <span class="t_id_css">Status</span>
                                    </div>
                                    <div class="col-xs-1 col-sm-1 colon">
                                        <span class="t_id_css">:</span>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 t_id_w02" style="display:none;">
                                        <span class="t_id_css">Failed</span>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 t_id_w02" >
                                        <span class="t_id_css">Success</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>