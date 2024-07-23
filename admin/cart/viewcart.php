<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .Teelab-banner {
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
            margin-bottom: 20px;
        }

        table {
            border: 1px solid #ebebeb;
            background-color: white;

        }
        td{
            border-left: none;
            border-top: none;
            border-bottom: solid 1px #ebebeb;
        }
        th, td {
            padding: 10px;
            text-align: center;
            background-color: white;
        }

        th {
            color: black;
            border-bottom: solid 1px #ebebeb;

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
            background-color: white;
            color: red;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 10px;
        }

        .San-Pham-Ban-chay {
            background-color: #f9f9f9;
            margin: auto;
            padding: 1px 0;
            margin-top: 200px;
        }
        .tensp{
            display: flex;
            flex-direction: column;
            height: 160px;
            text-align: left;
            justify-content: center;
        }
        .tong{
            text-align: left;
        }
        .gia{
            color: red;
        }
        .mb10 input{
            background-color: black;
            color: white;
            width: 230px;
            height: 50px;
        }
        .Teelab-product-1{
            justify-content: flex-end;
        }
        
        </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        var loader = function () {
            setTimeout(function () {
                $('#loader').css({ 'opacity': 0, 'visibility': 'hidden' });
            }, 1000);
        };
        $(function () {
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
        <h2>GIỎ HÀNG CỦA BẠN</h2>
        <div class="Teelab-product-1">
            <table>
                <tr>
                    <th>Thông tin sản phẩm</th>
                    <th></th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                        viewcart();
                ?>


            </table>
            <div class="mb10">
                <a href="index.php?act=billcart"><input type="button" value="Thanh toán"></a>
            </div>
        </div>
    
</body>
</html>
