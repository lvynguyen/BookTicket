<div class="row">
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

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Chọn chỗ ngồi</a></li>
    <li><a data-toggle="tab" href="#menu1">Chọn các dịch vụ khác</a></li>
</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="col-xs-6 col-md-offset-3 to-seat-map">
            <table class="table-bordered">
                <thead>
                <tr>
                    <th></th>
                    <?
                    for($i='A'; $i < 'G'; $i++){
                        echo "<th><label class='to-seat-head'>$i</label></th>";
                        if($i=='C'){
                            echo "<th><label class='to-seat-head'></label></th>";
                        }
                    }
                    ?>
                </tr>
                </thead>
                <tbody>
                <?
                for($i = 1; $i < 11; $i++){
                    echo "<tr><th><label class='to-seat-head'>$i</label></th>";
                    for($j='A'; $j < 'G'; $j++){
                        echo "<td><input type='checkbox' name='input_$j$i' id='$j$i' class='to-seat-input'><label class='to-seat-label' for='$j$i'></label></td>";
                        if($j=='C'){
                            echo "<td><label class='to-seat-head'></label></td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
    </div>
</div>

