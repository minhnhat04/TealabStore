<style>
    .Teelab-banner {
        display: none;
    }
    .San-Pham-Ban-chay{
        margin-top: 126px;
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
        height: 100%;
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
</style>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
var loader = function() {
    setTimeout(function() {
        $('#loader').css({ 'opacity': 0, 'visibility':'hidden' });
    }, 1000);
};
$(function(){
    loader();
});
</script>
<div id="loader">
    <div class="circle">
        <div class="circle1"></div>
        <div class="circle2"></div>
    </div>
</div>
    <?php
        // if(isset($litsbill) && (is_array($listbill))){
        //     extract($listbill);

        // }
    ?>
<div class="San-Pham-Ban-chay">
    <div class="Teelab-product-1" >
        <div class="nddonhang3">
            <div class="madh">
                <a href="">< Trở lại</a>
                <h3>Mã đơn hàng : DMN-<?=$listbill['id'];?></h3>
            </div>
            <hr>
            <div class="tientrinhdonhang">
                <div class="ddh">
                    <div class="nd-ddh">
                      <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="qt1">
                        Đơn hàng đã đặt
                    </div>
                    <div class="qt1-1">
                        <?=$listbill['ngaydathang'];?>
                    </div>
                </div>
                <div class="ddh">
                    <div class="nd-ddh">
                        <i class="fa-solid fa-money-bill"></i>
                    </div>
                    <div>
                        <?php
                            if ($bill_pttt == 2) {
                                echo '<div class="qt1">
                                        Vui lòng thanh toán
                                    </div>
                                    <div class="qt1-1">
                                        ' . number_format($listbill["total"]) .'đ
                                    </div>';
                            } else if ($bill_pttt == 1) {
                                echo '<div class="qt1">
                                        Chờ xác nhận
                                    </div>
                                    <div class="qt1-1">
                                    ' .($listbill["ngaydathang"]) . '
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Teelab-product-1" >
        <div class="nddonhang">
            <div class="dcnh">
                <h2>Địa chỉ nhận hàng</h2> 
                <p class="ten"><?=$listbill["bill_name"];?></p>
                <p class="ten1">(+84)<?=$listbill["bill_tel"];?></p>
                <p class="ten1"><?=$listbill["bill_address"];?></p>
                <p class="ten1">Lưu ý :</p>
            </div>
            <hr class="hr">
            <div class="qtdh">

            </div>
        </div>
    </div>
    <div class="Teelab-product-1" >
        <div class="nddonhang2">
            <div class="dcnh2">
                <h3 class="te">Tealab | <input class="xemshop" type="submit" value="Xem shop"></h3>
                <hr>
                <div class="table-container">
                <table>
                    <?php
                        viewcart_bill()
                    ?>
                </table>
                <hr>
                <div class="nd1_2">
                    <div class="nd1">
                        <p>Tổng tiền hàng : </p>                
                        <p>Phí vận chuyển : </p>                
                        <p>Thành tiền : </p>                
                        <p>Phương thức thanh toán: </p>          
                    </div>
                    <div class="nd2">
                        <p><?=number_format($listbill['total']);?>đ</p> 
                        <?php
                            $tong = 0;
                            $shippingFee = 20000;

                            foreach ($_SESSION['mycart'] as $cart) {
                                $tong = $total; 
                            }

                            $totalWithShipping = $tong + $shippingFee;

                            echo '<p>' . number_format($shippingFee) . 'đ</p>';
                            echo '<p>' . number_format($totalWithShipping) . 'đ</p>';
                        ?>           
                        <p><?php
                        
                        if ($listbill['bill_pttt'] == 1) {
                            echo 'Thanh toán khi nhận hàng';
                        } else if ($listbill['bill_pttt'] == 2) {
                            echo 'Thanh toán ngân hàng';
                        } else if ($listbill['bill_pttt'] == 3) {
                            echo 'Thanh toán qua Apple Pay';
                        } else {
                            echo 'Phương thức thanh toán không xác định';
                        }
                        
                        ?></p>        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>