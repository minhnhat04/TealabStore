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
            background-color: white;
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
            height: 100px;
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
        }
        .khungava {
        width: 80px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
        list-style: none;
        border-radius: 20px;
        padding: 0 15px;
        font-size: 20px;
        cursor: pointer;
    }

    .khungava img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }
    </style>
</head>
<body>
    <div class="formcontent">
        <form action="#" method="post">
            <div class="row">
                <table>
                <tr>
                    <th>Tên</th>
                    <th class="weight">Mật khẩu</th>
                    <th>Email</th>
                    <th class="weight">Địa chỉ</th>
                    <th class="weight">Sđt</th>
                    <th>Avatar</th>
                    <th>Chức năng</th>
                    <th></th>
                </tr>   
                    <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            $xoatk= "index.php?act=xoatk&id=" . $taikhoan['id'];
                            $img  = $taikhoan['img'];
                            $hingavata = "../uploadanhava/" . $img;
                            // Kiểm tra sự tồn uploadtại của hình ảnh chính
                            $hinhava = (file_exists($hingavata)) ? "<img src='{$hingavata}' height='80'>" : "No photo";
                            echo '
                            <tr>
                                <td>' . $taikhoan['user'] . '</td>
                                <td>' . $taikhoan['pass'] . '</td>
                                <td>' . $taikhoan['email'] . '</td>
                                <td>' . $taikhoan['address'] . '</td>
                                <td>' . $taikhoan['tel'] . '</td>
                                <td><div class="khungava">' . $hinhava . '</div></td>
                                <td>' . $taikhoan['role'] . '</td>
                                <td class="nut1">    
                                    <a href="' . $xoatk . '">
                                        <button class="b2" type="button">Xóa <i class="fa fa-trash-can"></i></button>
                                    </a>
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
            </div>
        </form>
    </div>
</body>
</html>
