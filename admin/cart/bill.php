<link rel="stylesheet" type="text/css" href="path/to/styles.css">
<style>
        .Teelab-banner {
            display: none;
        }
</style>
<form action="index.php?act=billcomform" method="post">
<div class="Content">
        <div class="Delivery-information">
            <div class="Content-Delivery-information">
                <h2>Thông tin nhận hàng</h2>
                <?php
                    if(isset($_SESSION['user'])){
                        $name = $_SESSION['user']['user'];
                        $adress = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    }else{
                        $name   = "";
                        $adress = "";
                        $email  = "";
                        $tel    = "";
                    }
               
                ?>
                <input type="text" placeholder="Email" name="email" value="<?=$email?>">
                <input type="text" placeholder="Họ và tên" name="name" value="<?=$name?>">
                <input type="text" placeholder="Số điện thoại" name="tel" value="<?=$tel?>">
                <input type="text" placeholder="Địa chỉ" name="address" value="<?=$address?>">
                <input type="text" placeholder="Tỉnh thành">
                <input type="text" placeholder="Quận huyện">
                <input type="text" placeholder="Phường xã">
                <input class="input" type="text" placeholder="Ghi chú (tùy chọn)">
            </div>
            <div class="Pay">
                <h2>Vận chuyển</h2>
                <div class="TTGH"> &nbsp; Giao hàng thông thường : 20.000đ</div>
                <h3>Thanh toán</h3>
                <div class="Content-Pay"> 
                     <input value="1" name="bill_pttt" type="radio"  checked> Thanh toán khi nhận hàng (COD) <br>
                     <input value="2" name="bill_pttt" type="radio">  Thanh toán ngân hàng  ( <img src="./img-TeeLab/logomb.png" alt="">) <br>
                     <input value="3" name="bill_pttt" type="radio">  Thanh toán qua Apple Pay <br>
                </div>
                
            </div>
        </div>
        <div class="Order">
            <h2>Đơn hàng</h2>
                <?php
                    viewcartbill()
                ?>
            <hr>
        </div>
    </div>
</form>