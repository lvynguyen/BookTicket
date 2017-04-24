<div class="col-xs-7 to-left">
    <div id="myCarousel" class="row carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="Images/20170423234105vn.jpg" width="100%" />
            </div>
            <div class="item">
                <img src="Images/201701251757443.jpg" width="100%" />
            </div>
            <div class="item">
                <img src="Images/18033922_1072516352850246_4403702516920717198_n.png" width="100%" />
            </div>
            <div class="item">
                <img src="Images/18011064_1067939223307959_4620034321788062124_n.png" width="100%" />
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row to-hotdeal">
        <h2>Khuyến mãi đặc biệt</h2>
        <div class="row to-hotdeal-banner">
            <div class="col-xs-6 to-hotdeal-item">
                <img src="Images/Busan.jpg" />
                <div>
                    <h4>Busan</h4>
                    <p>Hạng phổ thông</p>
                    <br />
                    <p>Giá khứ hồi (gồm thuế, phí)</p>
                    <h4>USD 612</h4>
                </div>
            </div>
            <div class="col-xs-6 to-hotdeal-item">
                <img src="Images/Seoul.jpg" />
                <div>
                    <h4>Seoul</h4>
                    <p>Hạng phổ thông</p>
                    <br />
                    <p>Giá khứ hồi (gồm thuế, phí)</p>
                    <h4>USD 467</h4>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <hr />
    </div>

    <div class="row to-pay">
        <div class="col-xs-6">
            <div class="col-xs-6">
                <img src="Images/tiepvien1.png" width="130" />
            </div>
            <div class="col-xs-6">
                <h4>Hướng dẫn đặt chỗ</h4>
                <p>Đặt chỗ và thanh toán dễ dàng chỉ với 6 bước đơn giản</p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-6">
                <img src="Images/hinhthuctt.png" width="130" />
            </div>
            <div class="col-xs-6">
                <h4>Hướng dẫn thanh toán</h4>
                <p>Đặt chỗ và thanh toán ngay hoặc đặt chỗ và thanh toán sau.</p>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-5 to-right">
    <form class="row" method="post" action="/BookTicket/Index.php?page=flight">
        <div class="row form-group">
            <div class="col-xs-12">
                <h3>Đặt vé </h3>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-6">
                <div class="radio">
                    <label><input type="radio" name="optradio">Một chiều</label>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="radio">
                    <label><input type="radio" name="optradio">Khứ hồi</label>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-6 ">
                <select name="startPlace" class="form-control">
                    <option value="1">Điểm khởi hành</option>
                    <option value="2">place2</option>
                    <option value="3">place3</option>
                    <option value="4">place4</option>
                </select>
            </div>
            <div class="col-xs-6">
                <input type="text" name="startDate" placeholder="Ngày đi" class="form-control datepicker" />
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-6 ">
                <select name="endPlace" class="form-control">
                    <option value="1">Điểm đến</option>
                    <option value="2">place2</option>
                    <option value="3">place3</option>
                    <option value="4">place4</option>
                </select>
            </div>
            <div class="col-xs-6">
                <input type="text" name="endDate" placeholder="Ngày đến" class="form-control datepicker" />
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12 ">
                <label>Loại tiền</label>
                <select name="typeCash" class="form-control">
                    <option value="1">place1</option>
                    <option value="2">place2</option>
                    <option value="3">place3</option>
                    <option value="4">place4</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-4 ">
                <label>Người lớn</label>
                <select name="numberOfAdult" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="col-xs-4 ">
                <label>Trẻ em</label>
                <select name="numberOfChild" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="col-xs-4 ">
                <label>Em bé</label>
                <select name="numberOfBaby" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12">
                <label><input type="checkbox" name="hanhKhachDacBiet"/> Hành khách đặc biệt</label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12">
                <button class="btn btn-primary pull-right" type="submit" >Tìm chuyến bay</button>
            </div>
        </div>
    </form>

    <div class="col-xs-12">
        <h2>Gọi ngay: 1900 8080</h2>
        <p>Để đặt chỗ và nhận các thông tin cần thiết</p>
    </div>

    <form class="row" method="post" action="?page=register">
        <div class="row form-group">
            <div class="col-xs-6">
                <div class="radio">
                    <label><input type="radio" name="optradio" value="sendEmail">Đăng ký nhận thông tin</label>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="radio">
                    <label><input type="radio" name="optradio" value="register">Đăng ký thành viên</label>
                </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12">
                <input type="text" name="email" placeholder="Email của bạn..." class="form-control" />
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-12">
                <button class="btn btn-primary pull-right" type="submit" >Đăng ký</button>
            </div>
        </div>
    </form>
</div>