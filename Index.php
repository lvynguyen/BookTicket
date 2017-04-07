<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Đặt vé trực tuyến</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link href="css/jquery-ui.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/Site.css"/>
    <link href="css/layout.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link href="css/menu.css" rel="stylesheet"/>
    <link href="css/to-left.css" rel="stylesheet"/>
    <link href="css/travel-option.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet"/>
    <link href="css/register.css" rel="stylesheet"/>
    <link href="css/flight.css" rel="stylesheet"/>
    <link href="css/passenger.css" rel="stylesheet"/>
    <link href="css/seat.css" rel="stylesheet"/>
    <link href="css/service.css" rel="stylesheet"/>
    <link href="css/payment.css" rel="stylesheet"/>
    <link href="css/submit.css" rel="stylesheet"/>
</head>

<body>
<div class="to-cover">
    <div class="row to-banner">
        <img src="images/banner.jpg" width="100%"/>
        <div class="to-username">
            <p>Tên đăng nhập: Lvy Nguyễn! /</p>
            <a href="#">Thoát</a>
        </div>
    </div>
    <div class="row to-menu">
        <ul class="col-xs-9">
            <li>
                <a>Tin tức</a>
            </li>
            <li>
                <a>
                    Thông tin chuyến bay
                </a>
                <ul>
                    <li><a>Đội bay</a></li>
                    <li><a>Lịch bay</a></li>
                    <li><a>Tình trạng chuyến bay</a></li>
                    <li><a>Điều lệ vận chuyển</a></li>
                    <li><a>Điều kiện vé</a></li>
                    <li><a>Phí và lệ phí</a></li>
                    <li><a>Giấy tờ tùy thân</a></li>
                </ul>
            </li>
            <li>
                <a>Dịch vụ</a>
                <ul>
                    <li><a>Dịch vụ trên chuyến bay</a></li>
                    <li><a>Hành lý</a></li>
                    <li><a>Dịch vụ hàng hóa</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                </ul>
            </li>
            <li>
                <a>Thông tin đặt chỗ</a>
                <ul>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                </ul>
            </li>
            <li>
                <a href="?page=login">Đăng nhập</a>
            </li>
            <li>
                <a>Chúng tôi</a>
                <ul>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                </ul>
            </li>
            <li>
                <a>Mua vé ở đâu</a>
                <ul>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                </ul>
            </li>
        </ul>
        <div class="col-xs-3 input-group">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">

            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="row to-content">
        <?php
        if (!isset($_GET['page'])) {
            include("views/home.php");
        } else {
            $page = $_GET["page"];
            switch ($page) {
                case "login":
                    include("views/login.php");
                    break;
                case "register":
                    include("views/register.php");
                    break;
                case "flight" :
                    include("views/flight-form.php");
                    break;
                case "passenger" :
                    include("views/passenger-form.php");
                    break;
                case "seat" :
                    include("views/seat-form.php");
                    break;
                case "service" :
                    include("views/service-form.php");
                    break;
                case "payment" :
                    include("views/payment.php");
                    break;
                case "end":
                    include("views/submit-form.php");
                    break;
            }
        }
        ?>
    </div>
    <div class="row to-footer">
        <h2>Travel</h2>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
        $("#payment-content i").hide();
        $("#payment-select").change(function () {
            $("#payment-content i").show();
            var ajaxURL = "";
            var a = this.value.toString();
           switch (a){
                case "1" : ajaxURL = "views/via-visa.php";
                    break;
                case "2" : ajaxURL = "views/via-master.php";
                    break;
                case "3" : ajaxURL = "views/via-agency.php";
                    break;
                case "4" : ajaxURL = "views/via-cod.php";
                   break;
               default: ajaxURL = ""; break;
            }
            if(ajaxURL !=""){
                $.ajax({url: ajaxURL, success: function(result){
                    $("#payment-content").html(result);
                    $("#payment-content i").hide();
                    $(".datepicker").datepicker({
                        changeMonth: true,
                        changeYear: true
                    });
                }});
            }
        });
    });
</script>
</body>
</html>