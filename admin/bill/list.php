<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
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

        a {
            text-decoration: none;
        }

        button {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px; /* Đã sửa lỗi chính tả tại đây */
        }

        button i {
            margin-right: 5px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .nut1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 152px;
            border: none;
        }
        .b1, .b2{
            display: flex;
        }
        .b2{
            background-color: red;
        }
        .nut1 button i{
            margin-left: 10px;
        }
        .weight{
            width: 140px;
            text-align: center;
        }
        .weight img{
            height: 80px;
            width: 60px;
        }
        .ndung{
            max-width: 200px; 
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
        form {
            width: auto;
            display: flex;
            flex-direction: row;
            max-width: 700x;
            padding: 5px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        select {
            width: calc(50% - 10px);
            padding: 8px;
            margin: 5px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 20%;
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .b2{
            padding: 15px;
        }
    </style>
</head>
<!-- ... (your HTML head) ... -->

<body>
    <div class="formcontent">
        <form action="index.php?act=list" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" value="Tìm kiếm">
        </form>
        <div class="row">
            <table>
                <tr>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌN TRẠNG ĐƠN HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listallbill as $bill) {
                    $xoabill = "index.php?act=xoabill&id=" . $bill['id'];
                    $kh = $bill['bill_name'] . '
                                <br>' . $bill['bill_email'] . '
                                <br>' . $bill['bill_tel'] . '
                                <br>' . $bill['bill_address'] . '
                                <br>' . $bill['bill_status'] . '';
                        $soluongsp = hienthisoluonghang($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $total = $bill['total'];
                    echo '<tr>
                                <td>DMN-' . $bill['id'] . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $soluongsp . '</td>
                                <td>' . $total . '</td>
                                <td>' . $ttdh . '</td>
                                <td>
                                <form action="index.php?act=updatebill" method="post">
                                    <select name="updatebill" id="updatebill">
                                        <option value="1" ' . ($bill['bill_status'] == 'Vận chuyển' ? 'selected' : '') . '>Vận chuyển</option>
                                        <option value="2" ' . ($bill['bill_status'] == 'Chờ giao hàng' ? 'selected' : '') . '>Chờ giao hàng</option>
                                        <option value="3" ' . ($bill['bill_status'] == 'Hoàn thành' ? 'selected' : '') . '>Hoàn thành</option>
                                        <option value="4" ' . ($bill['bill_status'] == 'Đã hủy' ? 'selected' : '') . '>Đã hủy</option>
                                    </select>
                                    <input type="hidden" name="capnhat" value="1">
                                    <input type="hidden" name="id" value="' . $bill['id'] . '">
                                    <button type="submit"><i class="fa-solid fa-gear"></i></button>
                                    <a href="' . $xoabill . '"><button class="b2" type="button"><i class="fa-solid fa-trash-can"></i></button></a>
                                </form>
                                </td>
                            </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row"></div>
    </div>
</body>

