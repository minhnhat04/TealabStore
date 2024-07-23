<link rel="stylesheet" href="css/ThanhToan.css">
<?php
    
    
    function viewcart() {
    if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart'])) {
        echo '<tr><td colspan="5">Giỏ hàng của bạn trống</td></tr>';
        return;
    }

    $tong = 0;
    foreach ($_SESSION['mycart'] as $i => $cart) {
        $hinh = "./upload/" . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp = "<a href='index.php?act=xoacart&idcart=$i'><input type='button' value='Xóa'></a>";

        echo '<tr>
                <td class="imgsp"><img src="' . $hinh . '" alt="" height="139px"></td>
                <td class="tensp">' . $cart[1] . ' ' . $xoasp . '</td>
                <td class="gia">' . number_format($cart[3]) . '</td>
                <td>' . $cart[4] . '</td>
                <td class="gia">' . number_format($ttien) . '</td>
            </tr>';
    }

    echo '<tr>
            <td class="tong" colspan="4">Tổng số tiền đơn hàng :</td>
            <td>' . number_format($tong) . '</td>
        </tr>';
}

    function viewcart_bill(){
        $tong = 0;
        $i = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = "./upload/" . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            echo '<tr">
                    <td class="khong"><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td class="mot">' . $cart[1] . '</td>
                    <td class="ba">' .number_format($cart[3]) . '</td>
                    <td class="hai">' . $cart[4] . '</td>
                    <td class="gia">' .number_format($ttien) . '</td>
                </tr>';
            $i += 1;
        }
    }
    
    function viewcartbill() {

        $tong = 0;
        $shippingFee = 20000;
    
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = "./upload/" . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            
            echo '<tr>
                    <div style="display: flex;
                                font-size: 16px;
                                font-family: sans-serif;
                                margin-top: 20px;
                                max-width: 400px;
                                overflow: auto; 
                                ">
                        <td><img src="' . $hinh . '" alt="" height="74px"></td>
                        <div style="margin-left: 12px;">' . $cart[1] . ' đ <br> Số lượng : ' . $cart[4] . '</div>
                        <td>' . number_format($cart[3]) . '</td>
                    </div>
                </tr>';

    
        }
    
        $totalWithShipping = $tong + $shippingFee;
    
        echo '
        <hr>
        <div class="Discount-code">
            <input type="text" placeholder="Nhập mã giảm giá"> <button>Áp dụng</button>
        </div>
        <hr>
        <div class="Price">
            <h4>Phí vận chuyển : ' . number_format($shippingFee) . 'đ</h4>
        </div>
        <hr>
        <div class="Price">
            <h4>Tổng cộng : ' . number_format($totalWithShipping) . 'đ </h4>
        </div>
        <div class="Price-order">
            <a href="./GioHang.php">❮ Quay về giỏ hàng</a> <input class="inputdh" type="submit" value="Đặt hàng" name="dongydathang" >
        </div>';
    }

    function tongdonhang(){
        $tong = 0;
        
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
        }
        return $tong;
    }
    
    function img(){
        
        foreach ($_SESSION['mycart'] as $cart) {
            $bill_img = $cart[2];
        }
        return $bill_img;
    }
    function name(){
        
        foreach ($_SESSION['mycart'] as $cart) {
            $bill_namedh = $cart[1];
        }
        return $bill_namedh;
    }

    function insert_bill($iduser,$bill_name, $bill_email, $bill_address, $bill_tel,$bill_pttt, $ngaydathang,$total,$bill_img,$bill_namedh){
        $sql = "INSERT INTO bill (iduser,bill_name, bill_email, bill_address, bill_tel,bill_pttt, ngaydathang,total,bill_img,bill_namedh) VALUES ('$iduser','$bill_name', '$bill_email', '$bill_address', '$bill_tel','$bill_pttt', '$ngaydathang','$total','$bill_img','$bill_namedh')";
        return pdo_execute_lastInsertID($sql);
    
    }
    function insert_cart( $iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill ){
        $sql = "INSERT INTO cart ( iduser , idpro , img , name, price, soluong , thanhtien ,idbill) VALUES ('$iduser', '$idpro', '$img','$name', '$price','$soluong', '$thanhtien','$idbill')";
        return pdo_execute_lastInsertID($sql);
    
    }
    function hienthibill($id){
        $sql = "select * from bill where id=".$id;
        $listbill = pdo_query_one($sql);
        return $listbill;
    }
    
    function hienthisoluonghang($idbill){
        $sql = "select * from cart where idbill=".$idbill;
        $listbill = pdo_query($sql);
        return sizeof($listbill);
    }
    function hienthimybill($iduser){
        $sql = "select * from bill where iduser=".$iduser;
        $listbill = pdo_query_one($sql);
        return $listbill;
    }

    function hienthiallbill($kyw="",$iduser=0){

        $sql = "select * from bill where 1";
        if($iduser>0) $sql.= " AND iduser=".$iduser;
        if($kyw!="") $sql.= " AND id like '%".$kyw."%'";
        $sql.= " order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function get_ttdh($n){
        switch ($n){
            case '0' :
                $tt = "Chờ thanh toán";
                break;
            case '1' :
                $tt = "Vận chuyển";
                break;
            case '2' :
                $tt = "Chờ giao hàng";
                break;
            case '3' :
                $tt = "Hoàn thành";
                break;
            case '4' :
                $tt = "Đã hủy";
                break;
            default:
                $tt = "";
                break;
        }
        return $tt;
    }
    function updateTrangThaiDonHang($bill_status, $id){
        $sql = "update bill set bill_status='".$bill_status."' where id=".$id;
        pdo_execute($sql);
    }
    
    function delete_bill($id){
        $sql = "delete from bill where id=".$_GET['id'];
        pdo_execute($sql);
    }
?>
