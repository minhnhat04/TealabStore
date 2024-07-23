<style>
        .Teelab-banner{
            display: none;
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        .formcontent {
            width: calc(100% - 220px);
            margin-left: 200px;
            padding: 10px 50px;
            border-radius: 5px;
            background-color: #ecf0f1;
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

        input[type="button"] {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 10px;
        }
        .San-Pham-Ban-chay{
            background-color: #f9f9f9;;
            margin: auto;
            padding: 1px 0;
            margin-top: 200px;
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

<div class="San-Pham-Ban-chay">
    <h2>TEELAD | GIỎ HÀNG CỦA BẠN</h2>
    <div class="Teelab-product-1" >
        <table>
        <tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        <?php
            $tong=0;
            $i = 0;
            global $img_part;
            foreach ($_SESSION['mycart'] as $cart ) {
                $hinh = $img_part.$cart[2];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                echo '<tr>
                            <td>1</td>
                            <td><img src="'.$hinh.'" alt="" height="80px"></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[3].'</td>
                            <td>'.$cart[4].'</td>
                            <td>'.$ttien.'</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr>';
            }
            echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>'.$tong.'</td>
                    <td></td>
                </tr>';
        ?>
    </table>
    </div>
</div>