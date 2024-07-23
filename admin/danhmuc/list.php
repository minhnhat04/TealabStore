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
    </style>
</head>
<body>
    <div class="formcontent">
        <form action="#" method="post">
            <div class="row">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            $suadm = "index.php?act=suadm&id=" . $danhmuc['id'];
                            $xoadm = "index.php?act=xoadm&id=" . $danhmuc['id'];
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $danhmuc['id'] . '</td>
                                <td>' . $danhmuc['name'] . '</td>
                                <td class="nut1">    
                                <a href="' . $suadm . '"><button class="b1" type="button">Sửa <i class="fa-solid fa-pen"></i></button></a>
                                <a href="' . $xoadm . '"><button class="b2" type="button">Xóa <i class="fa-solid fa-trash-can"></i></button></a>
                            </td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="row"></div>
            <div class="mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</body>
</html>
