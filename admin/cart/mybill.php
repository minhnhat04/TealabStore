<style>
    .Teelab-banner {
        display: none;
    }
    .San-Pham-Ban-chay{
        margin-top: 126px;
        height: 100%;
    }
    .nddonhang{
        width: 70%;
        height: 300px;
        background-color: white;
        margin: auto;
        display: flex;
        border-radius: 5px;
    }
    .nddonhang2{
        width: 70%;
        height: auto;
        background-color: #f1f1f1;
        margin: auto;
        display: flex;
        border-radius: 5px;
    }
    .nddonhang3{
        width: 70%;
        height: 320px;
        background-color: white;
        margin: auto;
        border-radius: 5px;
    }
    .dcnh{
        width: 45%;
        height: 100%;
        /* background-color: antiquewhite; */
    }
    .dcnh2{
        width: 100%;
        /* background-color: antiquewhite; */
        padding: 10px 35px;
    }
    
    .qtdh{
        width: 60%;
        height: 100%;
        /* background-color: aquamarine; */
    }
    .ten{
        font-family: sans-serif;
        padding: 0 35px;
        font-size: 20px;
        font-weight: 500;
        font-style: normal;
        letter-spacing: .01em;
        color: #484848;
        margin-top: 10px;
    }
    .ten1{
        font-family: sans-serif;
        padding: 0 35px;
        font-size: 15px;
        font-weight: 500;
        margin-top: 10px;
        font-style: normal;
        letter-spacing: .01em;
        color: #484848; 
    }
    .hr{
        margin-top: 0;
        height: 90%;
        margin: auto;
    }
    .xemshop{
        margin-left: 10px;
        font-size: 15px;
        cursor: pointer;
    }
    .nd1_2{
        display: flex;
    }
    .nd1{
        width: 70%;
        height: auto;
        font-family: sans-serif;
        font-size: 15px;
        color: grey;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .nd2{
        width: 30%;
        height: auto;
        font-family: sans-serif;
        font-size: 15px;
        color: grey;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .nd2 p{
        margin-top: 10px;
    }
    .nd1 p{
        margin-top: 10px;
    }
    .te{
        padding: 0;
        font-family: sans-serif;
        font-size: 20px;
        font-weight: 600;
        font-style: normal;
        letter-spacing: .01em;
        color: #484848;
    }
    table{
        margin-top: 20px;
        font-size: 17px;
        font-family: sans-serif;
    }

    .mot{
        width: 62%;
    }
    .hai{
        width: 15%;
    }
    .ba{
        width: 15%;
    }
    .khong{
        width: 13%;
    }
    .madh{
        display: flex;
        height: auto;
        justify-content: space-between;
        width: 100%;
        padding: 10 35px;

    }
    .madh h3{
        font-family: sans-serif;
        font-size: 20px;
    }
    .madh a{
        text-decoration: none;
        font-family: sans-serif;
        font-size: 20px;
        color: gray;
    }
    .tientrinhdonhang{
        width: 100%;
        height: auto;
        /* background-color: aqua; */
        margin: auto;
        display: flex;
        padding: 10px;
        justify-content: space-around;
    }
    .ddh{
        width: 19%;
        height: 240px;
        /* background-color: aquamarine; */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;        
    }
    .nd-ddh{
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: antiquewhite;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .nd-ddh i{
        font-size: 33px;
    }
    .qt1{
        font-family: sans-serif;
        font-size: 20px;
        text-align: center;
        margin-top: 15px;
    }
    .qt1-1{
        font-family: sans-serif;
        font-size: 15px;
        text-align: center;
        margin-top: 10px;
    }
    table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #3498db;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .row {
            margin-top: 10px;
        }

        .mb10 {
            margin-top: 15px;
        }
        .div-khung{
            width: 100%;
            margin-top: 50px;
        }
        .khung{
            width: 70%;
            height: auto;
            background-color: white;
            display: flex;
            margin: auto;
            justify-content: space-between;
            height: 50px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            font-family: sans-serif;
        }
        .conten-dh{
            width: 100%;
            height: auto;
        }
        .khung-conten-dh{
            width: 70%;
            background-color: white;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            margin: auto;
            margin-top: 20px;
        }
        .div-1{
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .div-1 p{
            font-size: 25px;
            font-family: sans-serif;
            color: red;
        }
        .tongth{
            color: red;
        }
        .div-01{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            font-family: sans-serif;
        }
        .khung div{
            width: 19%;
            height: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s ease; /* Hiệu ứng chuyển động khi hover */
            cursor: pointer;
        }
        .khung div:hover {
            /* Các thuộc tính khi hover vào phần tử */
            border-bottom: 2px solid #3498db; /* Đổi màu và độ dày của đường viền dưới khi hover */
        }
        .active {
            background-color: aliceblue;
            border-bottom: 2px solid #3498db; /* Đổi màu và độ dày của đường viền dưới khi được nhấp */
        }
        .vlnhktt{
            width: 100%;
            height: 50px;
            display: flex;
            padding: 10px 0;
            justify-content: space-between;
        }
        .vlnhktt1{
            width: 50%;
        }
        .vlnhktt1 p{
            font-size: 13px;
            font-family: sans-serif;
            color: grey;
        }
        .vlnhktt2{
            width: 45%;
            display: flex;
            justify-content: space-between;
        }
        .vlnhktt2 input {
            width: 48%;
            font-size: 15px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
            outline: none; 
            cursor: pointer;
        }

        .kcdh{
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .kcdh p{
            margin-top: 15px;
            font-family: sans-serif;
        }
</style>
<script>
    // JavaScript để thêm và xóa lớp 'active'
    document.addEventListener('DOMContentLoaded', function () {
        var elements = document.querySelectorAll('.khung div');
        elements.forEach(function (element) {
            element.addEventListener('click', function () {
                elements.forEach(function (el) {
                    el.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    });
</script>
<div class="San-Pham-Ban-chay">
    <div class="Teelab-product-1">
        <div class="div-khung">
            <div class="khung">
                <div onclick="toggleContent_1()">Chờ thanh toán</div>
                <div onclick="toggleContent_2()">Vận chuyển</div>
                <div onclick="toggleContent_3()">Chờ giao hàng</div>
                <div onclick="toggleContent_4()">Hoàn thành</div>
                <div onclick="toggleContent_5()">Đã hủy</div>
            </div>
            <div class="khung-conten-dh">
                <div class="conten-dh" id="content-1" style="display: block;">
                <?php
                    $ttdh = $listbill['bill_status'];
                    if ($ttdh == 0) {
                        echo '
                                    <div class="dcnh2">
                                        <div class="div-1">
                                            <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                                            <p>';
    
                        if ($ttdh == 0) {
                            echo 'Chờ thanh toán';
                        } else if ($ttdh == 1) {
                            echo 'Vận chuyển';
                        } else if ($ttdh == 2) {
                            echo 'Chờ giao hàng';
                        } else if ($ttdh == 3) {
                            echo 'Hoàn thành';
                        } else if ($ttdh == 4) {
                            echo 'Đã hủy';
                        }
    
                        echo '</p>
                                        </div>
                                        <hr>
                                        <div class="table-container">';
    
                        $hinh = "./upload/" . $listbill['bill_img'];
                        $bill_namedhh = $listbill['bill_namedh'];
    
                        echo '<div class="div-01">
                                <div class="khong"><img src="' . $hinh . '" alt="" height="80px"></div>
                                <div> ' . $bill_namedhh . '</div>
                                <div> ' . number_format($listbill['total']) . 'đ</div>
                            </div>';
    
                        echo '<hr>
                                <div class="nd1_2">
                                    <div class="nd1">
                                        <p>Thành tiền : </p>                
                                        <p>Phương thức thanh toán: </p>          
                                    </div>
                                    <div class="nd2">';
    
                        $tong = 0;
                        $shippingFee = 20000;
                        $tong = $listbill['total'];
                        $totalWithShipping = $tong + $shippingFee;
    
                        echo '<p class="tongth">' . number_format($totalWithShipping) . 'đ</p>
                                    <p>';
    
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
    
                        echo '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else if($ttdh == 1){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 2){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 3){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 4){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    }

                ?>
                </div>
                <div class="conten-dh" id="content-2" style="display: none;">
                <?php
                    $ttdh = $listbill['bill_status'];
                    if ($ttdh == 1) {
                        echo '
                                    <div class="dcnh2">
                                        <div class="div-1">
                                            <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                                            <p>';
    
                        if ($ttdh == 0) {
                            echo 'Chờ thanh toán';
                        } else if ($ttdh == 1) {
                            echo 'Vận chuyển';
                        } else if ($ttdh == 2) {
                            echo 'Chờ giao hàng';
                        } else if ($ttdh == 3) {
                            echo 'Hoàn thành';
                        } else if ($ttdh == 4) {
                            echo 'Đã hủy';
                        }
    
                        echo '</p>
                        </div>
                        <hr>
                        <div class="table-container">';
    
                        $hinh = "./upload/" . $listbill['bill_img'];
                        $bill_namedhh = $listbill['bill_namedh'];
    
                        echo '<div class="div-01">
                                <div class="khong"><img src="' . $hinh . '" alt="" height="80px"></div>
                                <div> ' . $bill_namedhh . '</div>
                                <div> ' . number_format($listbill['total']) . 'đ</div>
                            </div>';
    
                        echo '<hr>
                                <div class="nd1_2">
                                    <div class="nd1">
                                        <p>Thành tiền : </p>                
                                        <p>Phương thức thanh toán: </p>          
                                    </div>
                                    <div class="nd2">';
    
                        $tong = 0;
                        $shippingFee = 20000;
                        $tong = $listbill['total'];
                        $totalWithShipping = $tong + $shippingFee;
    
                        echo '<p class="tongth">' . number_format($totalWithShipping) . 'đ</p>
                                    <p>';
    
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
    
                        echo '</p>
                        
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else if($ttdh == 0){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 2){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 3){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 4){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    }
                ?>
                </div>
                <div class="conten-dh" id="content-3" style="display: none;">
                <?php
                    $ttdh = $listbill['bill_status'];
                    if ($ttdh == 2) {
                        echo '
                        <div class="dcnh2">
                        <div class="div-1">
                        <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                        <p>';
    
                        if ($ttdh == 0) {
                            echo 'Chờ thanh toán';
                        } else if ($ttdh == 1) {
                            echo 'Vận chuyển';
                        } else if ($ttdh == 2) {
                            echo 'Chờ giao hàng';
                        } else if ($ttdh == 3) {
                            echo 'Hoàn thành';
                        } else if ($ttdh == 4) {
                            echo 'Đã hủy';
                        }
    
                        echo '</p>
                        </div>
                        <hr>
                        <div class="table-container">';
    
                        $hinh = "./upload/" . $listbill['bill_img'];
                        $bill_namedhh = $listbill['bill_namedh'];
    
                        echo '<div class="div-01">
                                <div class="khong"><img src="' . $hinh . '" alt="" height="80px"></div>
                                <div> ' . $bill_namedhh . '</div>
                                <div> ' . number_format($listbill['total']) . 'đ</div>
                            </div>';
    
                        echo '<hr>
                                <div class="nd1_2">
                                    <div class="nd1">
                                        <p>Thành tiền : </p>                
                                        <p>Phương thức thanh toán: </p>          
                                    </div>
                                    <div class="nd2">';
    
                        $tong = 0;
                        $shippingFee = 20000;
                        $tong = $listbill['total'];
                        $totalWithShipping = $tong + $shippingFee;
    
                        echo '<p class="tongth">' . number_format($totalWithShipping) . 'đ</p>
                                    <p>';
    
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
    
                        echo '</p>
                        </div>
                        </div>
                        </div>
                        <div class="vlnhktt">
                            <div class="vlnhktt1">
                                <p>Vui lòng chỉ nhấn "Đã nhận được hàng" khi đơn hàng đã được giao đến 
                                <br>bạn và sản phẩm nhận được không có vấn đề nào.</p>
                            </div>
                            <div class="vlnhktt2">
                                <input type="button" name="" id="btnDaNhanHang" value="Đã nhận hàng">
                                <input type="button" name="" id="btnDaNhanHang1" value="Yêu cầu trả hàng hoàn tiền">
                            </div>
                        </div>
                        </div>
                        ';
                    } else if($ttdh == 0){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 1){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 3){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 4){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    }
                ?>
                </div>
                <div class="conten-dh" id="content-4" style="display: none;">
                <?php
                    $ttdh = $listbill['bill_status'];
                    if ($ttdh == 3) {
                        echo '
                                    <div class="dcnh2">
                                        <div class="div-1">
                                            <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                                            <p>';
    
                        if ($ttdh == 0) {
                            echo 'Chờ thanh toán';
                        } else if ($ttdh == 1) {
                            echo 'Vận chuyển';
                        } else if ($ttdh == 2) {
                            echo 'Chờ giao hàng';
                        } else if ($ttdh == 3) {
                            echo 'Hoàn thành';
                        } else if ($ttdh == 4) {
                            echo 'Đã hủy';
                        }
    
                        echo '</p>
                                        </div>
                                        <hr>
                                        <div class="table-container">';
    
                        $hinh = "./upload/" . $listbill['bill_img'];
                        $bill_namedhh = $listbill['bill_namedh'];
    
                        echo '<div class="div-01">
                                <div class="khong"><img src="' . $hinh . '" alt="" height="80px"></div>
                                <div> ' . $bill_namedhh . '</div>
                                <div> ' . number_format($listbill['total']) . 'đ</div>
                            </div>';
    
                        echo '<hr>
                                <div class="nd1_2">
                                    <div class="nd1">
                                        <p>Thành tiền : </p>                
                                        <p>Phương thức thanh toán: </p>          
                                    </div>
                                    <div class="nd2">';
    
                        $tong = 0;
                        $shippingFee = 20000;
                        $tong = $listbill['total'];
                        $totalWithShipping = $tong + $shippingFee;
    
                        echo '<p class="tongth">' . number_format($totalWithShipping) . 'đ</p>
                                    <p>';
    
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
    
                        echo '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else if($ttdh == 0){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 1){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 2){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 4){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    }
                ?>
                </div>
                <div class="conten-dh" id="content-5" style="display: none;">
                <?php
                    $ttdh = $listbill['bill_status'];
                    if ($ttdh == 4) {
                        echo '
                                    <div class="dcnh2">
                                        <div class="div-1">
                                            <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                                            <p>';
    
                        if ($ttdh == 0) {
                            echo 'Chờ thanh toán';
                        } else if ($ttdh == 1) {
                            echo 'Vận chuyển';
                        } else if ($ttdh == 2) {
                            echo 'Chờ giao hàng';
                        } else if ($ttdh == 3) {
                            echo 'Hoàn thành';
                        } else if ($ttdh == 4) {
                            echo 'Đã hủy';
                        }
    
                        echo '</p>
                                        </div>
                                        <hr>
                                        <div class="table-container">';
    
                        $hinh = "./upload/" . $listbill['bill_img'];
                        $bill_namedhh = $listbill['bill_namedh'];
    
                        echo '<div class="div-01">
                                <div class="khong"><img src="' . $hinh . '" alt="" height="80px"></div>
                                <div> ' . $bill_namedhh . '</div>
                                <div> ' . number_format($listbill['total']) . 'đ</div>
                            </div>';
    
                        echo '<hr>
                                <div class="nd1_2">
                                    <div class="nd1">
                                        <p>Thành tiền : </p>                
                                        <p>Phương thức thanh toán: </p>          
                                    </div>
                                    <div class="nd2">';
    
                        $tong = 0;
                        $shippingFee = 20000;
                        $tong = $listbill['total'];
                        $totalWithShipping = $tong + $shippingFee;
    
                        echo '<p class="tongth">' . number_format($totalWithShipping) . 'đ</p>
                                    <p>';
    
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
    
                        echo '</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else if($ttdh == 0){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 1){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 2){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    } else if($ttdh == 3){
                        echo '<div class="kcdh"><img src="./img-TeeLab/kcodonhang.png" alt=""><p>Không có đơn hàng</p><br></div>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContent_1() {
        document.getElementById("content-1").style.display = "block";
        document.getElementById("content-2").style.display = "none";
        document.getElementById("content-3").style.display = "none";
        document.getElementById("content-4").style.display = "none";
        document.getElementById("content-5").style.display = "none";
    }

    function toggleContent_2() {
        document.getElementById("content-1").style.display = "none";
        document.getElementById("content-2").style.display = "block";
        document.getElementById("content-3").style.display = "none";
        document.getElementById("content-4").style.display = "none";
        document.getElementById("content-5").style.display = "none";
    }
    function toggleContent_3() {
        document.getElementById("content-1").style.display = "none";
        document.getElementById("content-2").style.display = "none";
        document.getElementById("content-3").style.display = "block";
        document.getElementById("content-4").style.display = "none";
        document.getElementById("content-5").style.display = "none";
    }
    function toggleContent_4() {
        document.getElementById("content-1").style.display = "none";
        document.getElementById("content-2").style.display = "none";
        document.getElementById("content-3").style.display = "none";
        document.getElementById("content-4").style.display = "block";
        document.getElementById("content-5").style.display = "none";
    }
    function toggleContent_5() {
        document.getElementById("content-1").style.display = "none";
        document.getElementById("content-2").style.display = "none";
        document.getElementById("content-3").style.display = "none";
        document.getElementById("content-4").style.display = "none";
        document.getElementById("content-5").style.display = "block";
    }

    // Repeat similar functions for toggleContent_3, toggleContent_4, toggleContent_5
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Bắt sự kiện click cho nút "Đã nhận hàng"
    document.getElementById("btnDaNhanHang").addEventListener("click", function() {
        // Hiển thị SweetAlert
        Swal.fire("Đơn hàng đang trên đường giao đến bạn!")
    });
</script>
<script>
    // Bắt sự kiện click cho nút "Đã nhận hàng"
    document.getElementById("btnDaNhanHang1").addEventListener("click", function() {
        // Hiển thị SweetAlert
        Swal.fire("Vui lòng chọn yêu cầu trả hàng/ hoàn tiền khi đã nhận được sản phẩm!")
    });
</script>



