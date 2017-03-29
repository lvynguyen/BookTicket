<div class="row to-seat">
    <div class="col-xs-12 no-padding">
        <ul class="row pp-tab">
            <li class="tab-item active">
                <a href="">Ngày</a>
            </li>
            <li class="tab-item active">
                <a href="">Chuyến bay</a>
            </li>
            <li class="tab-item active">
                <a href="">Hành khách</a>
            </li>
            <li class="tab-item active">
                <a href="#">Chỗ ngồi</a>
            </li>
            <li class="tab-item">
                <a href="#">Dịch vụ</a>
            </li>
            <li class="tab-item">
                <a href="#">Thanh toán</a>
            </li>
            <li class="tab-item">
                <a href="#">Xác nhận</a>
            </li>
            <li class="tab-item">
                <a href="#">Hoàn thành</a>
            </li>
        </ul>
    </div>

    <ul class="col-xs-12 nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#flight1">Chuyến bay 1</a></li>
        <li><a data-toggle="tab" href="#flight2">Chuyến bay 2</a></li>
    </ul>

    <div class="col-xs-12 tab-content">
        <div id="flight1" class="row tab-pane fade in active">
            <div class="col-xs-5 to-seat-map">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <?
                        for ($i = 'A'; $i < 'G'; $i++) {
                            echo "<th><label class='to-seat-head'>$i</label></th>";
                            if ($i == 'C') {
                                echo "<th><label class='to-seat-head'></label></th>";
                            }
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    for ($i = 1; $i < 20; $i++) {
                        echo "<tr><th><label class='to-seat-head'>$i</label></th>";
                        for ($j = 'A'; $j < 'G'; $j++) {
                            echo "<td><input type='checkbox' name='input_$j$i' id='$j$i' class='to-seat-input'><label class='to-seat-label' for='$j$i'></label></td>";
                            if ($j == 'C') {
                                echo "<td><label class='to-seat-head'></label></td>";
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-7">
                <div class="to-seat-note">
                    <h3>Ghi chú</h3>

                    <p><i class="fa fa-square"\></i> Ghế còn trống</p>

                    <p><i class="fa fa-square"\></i> Ghế đã chọn</p>

                    <p><i class="fa fa-square"\></i> Ghế gần lối thoát hiểm</p>

                    <p><i class="fa fa-square"\></i> Ghế dặc biệt</p>

                    <p><i class="fa fa-square"\></i> Ghế đã bị chọn/không có</p>
                </div>
                <div>
                    <h3>Xin lưu ý</h3>

                    <p>Với vé Skyboss, quý khác được lựa chọn chỗ ngồi miễn phí</p>

                    <p>Chúng tôi không đảm bảo cung cấp đúng chỗ ngồi lối thoát hiểm quý khách đã đặt trước và
                        chỗ
                        này có thể thay đổi mà không thông báo. Chỗ ngồi thoát hiểm (hàng ghế 12 và 14) chỉ có
                        thể
                        sắp xếp cho cách hành khách người lớn và có khả năng hỗ trợ hành khách khác trong trường
                        hợp
                        khẩn cấp. Xin lưu ý rằng hành khách bị hạn chế khả năng nghe nhìn, hành khách tàn tật
                        hoặc
                        hành khách có kèm trẻ nhỏ đi cùng không được phép ngồi chỗ này</p>
                </div>
                <div>
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th>Hành khách</th>
                            <th>Tốn phí</th>
                            <th>Ghế ngồi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>sss</td>
                            <td>ssss</td>
                            <td>dddd</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="flight2" class="row tab-pane fade">
            <div class="col-xs-5 to-seat-map">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <?
                        for ($i = 'A'; $i < 'G'; $i++) {
                            echo "<th><label class='to-seat-head'>$i</label></th>";
                            if ($i == 'C') {
                                echo "<th><label class='to-seat-head'></label></th>";
                            }
                        }
                        ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    for ($i = 1; $i < 20; $i++) {
                        echo "<tr><th><label class='to-seat-head'>$i</label></th>";
                        for ($j = 'A'; $j < 'G'; $j++) {
                            echo "<td><input type='checkbox' name='input_$j$i' id='$j$i' class='to-seat-input'><label class='to-seat-label' for='$j$i'></label></td>";
                            if ($j == 'C') {
                                echo "<td><label class='to-seat-head'></label></td>";
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-7">
                <div class="to-seat-note">
                    <h3>Ghi chú</h3>

                    <p><i class="fa fa-square"\></i> Ghế còn trống</p>

                    <p><i class="fa fa-square"\></i> Ghế đã chọn</p>

                    <p><i class="fa fa-square"\></i> Ghế gần lối thoát hiểm</p>

                    <p><i class="fa fa-square"\></i> Ghế dặc biệt</p>

                    <p><i class="fa fa-square"\></i> Ghế đã bị chọn/không có</p>
                </div>
                <div>
                    <h3>Xin lưu ý</h3>

                    <p>Với vé Skyboss, quý khác được lựa chọn chỗ ngồi miễn phí</p>

                    <p>Chúng tôi không đảm bảo cung cấp đúng chỗ ngồi lối thoát hiểm quý khách đã đặt trước và
                        chỗ
                        này có thể thay đổi mà không thông báo. Chỗ ngồi thoát hiểm (hàng ghế 12 và 14) chỉ có
                        thể
                        sắp xếp cho cách hành khách người lớn và có khả năng hỗ trợ hành khách khác trong trường
                        hợp
                        khẩn cấp. Xin lưu ý rằng hành khách bị hạn chế khả năng nghe nhìn, hành khách tàn tật
                        hoặc
                        hành khách có kèm trẻ nhỏ đi cùng không được phép ngồi chỗ này</p>
                </div>
                <div>
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th>Hành khách</th>
                            <th>Tốn phí</th>
                            <th>Ghế ngồi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>sss</td>
                            <td>ssss</td>
                            <td>dddd</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <a class="to-form-back" href="javascript:history.back()">
            <i class="fa fa-arrow-circle-left"></i>
        </a>
        <a class="to-form-next pull-right" href="?page=service">
            <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

