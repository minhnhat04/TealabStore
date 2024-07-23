<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">

<?php
ob_start();
session_start();

include "model/pdo.php";
include "view/header.php";
include "model/sanpham.php";
include "model/taikhoan.php";
// include "model/danhmuc.php";
include "model/cart.php";
include "global.php";   

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew  = hienthisanpham_home();
$dstop5 = hienthisanpham_top5();
$spsp   = hienthisanpham_sp();
$dsdm   = hienthidanhmuc();
$dstk   = hienthitaikhoan();

        if(isset($_GET["act"]) && $_GET["act"] != "") {
            $act = $_GET['act'];
            switch($act) {
        case 'sanphamct':
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $id = $_GET['idsp'];
                $onesp = sua_sanpham($id);
                include 'view/sanphamct.php';
            } else {
                
            }
            break;
        case 'sanpham':
            if(isset($_POST['kyw']) && $_POST['kyw'] != ""){
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = hienthisanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
        case 'giohang':
            include 'view/giohang.php';
            break;
        case 'tatcasanpham':
            include 'view/tatcasanpham.php';
            break;
        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkemail = checkemail($email, $pass); 
                if (is_array($checkemail)) {
                    $_SESSION['user'] = $checkemail;
                    
                    header('location: index.php');
                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra email hoặc pass";
                }
            }
            include 'admin/taikhoan/dangnhap.php';
            break;
        
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $img = basename($_FILES['img']['name']);
                    
                    $target_dir = "uploadanhava/"; 
                    $target_file = $target_dir . $img;

                        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                            insert_taikhoan($email, $user, $pass, $img, $address,$tel);
            
                    }
                    echo '<script>
                        Swal.fire({
                            title: "Thành công!",
                            text: "Đăng ký thành công. Mời bạn đăng nhập!",
                            icon: "success"
                        }).then(function() {
                            window.location.href = "http://localhost:8080/Teelab/index.php?act=dangnhap";
                        });
                    </script>';
                }
            
                include 'admin/taikhoan/dangky.php';
                break;
            
        
                case 'qmk':
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email']; // assuming email is submitted through a form
                        
                        $to = $email; // Use the submitted email address
                        $subject = "Yêu cầu đặt lại mật khẩu";
                        $message = "Vui lòng nhấn vào liên kết sau để đặt lại mật khẩu: http://localhost:8080/Teelab/index.php?act=updateqmk";
                        $headers = "From: Teelad.vn" . "\r\n" .
                                   "Reply-To: Dominhnhat.ha@gmail.com" . "\r\n" .
                                   "X-Mailer: PHP/" . phpversion();
                    
                        // Gửi email
                        if (mail($to, $subject, $message, $headers)) {
                            echo '<script>
                            Swal.fire({
                                title: "Thành công!",
                                text: "Gửi yêu cầu đổi mật khẩu thành công, vui lòng check mail!",
                                icon: "success"
                            }).then(function() {
                                window.location.href = "http://localhost:8080/Teelab/admin/index.php?act=listsp";
                            });
                            </script>';
                            } else {
                            echo "Không thể gửi yêu cầu đặt lại mật khẩu.";
                        }
                    }
                    include 'view/qmk.php';
                    break;
                
        case 'updateqmk':
            include 'view/update_password.php';
            break;

        // trang giỏi hàng
        case 'addtocart':
            // Kiểm tra đăng nhập
            if (isset($_SESSION['user'])) {
                $iduser = $_SESSION['user']['id'];

                // Thêm sản phẩm vào giỏ hàng
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien = $soluong * $price;
                    $spadd = [$id, $name, $img, $price, $soluong, $ttien];

                    array_push($_SESSION['mycart'], $spadd);

                    // Thêm thông tin sản phẩm vào cơ sở dữ liệu
                    $idpro = $id; // Điều chỉnh nếu idpro cần phải lấy từ form hoặc trường khác
                    $thanhtien = $soluong * $price;
                    $idbill = 1; // Điều chỉnh nếu idbill cần phải lấy từ form hoặc trường khác
                    insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill);

                    echo '<script>
                    Swal.fire({
                        title: "Thành công!",
                        text: "Thêm sản phẩm thành công!",
                        icon: "success"
                    }).then(function() {
                        window.location.href = "http://localhost:8080/Teelab/index.php?act=addtocart";
                    });
                    </script>';
                }

                include('admin/cart/viewcart.php');
            } else {
                echo "Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.";
            }
            break;

        case 'xoacart':
            if (isset($_GET['idcart'])) {
                unset($_SESSION['mycart'][$_GET['idcart']]);
                $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            } else {
            $_SESSION['mycart'] = $_SESSION['mycart'] ?? [];
            }
            header('location: index.php?act=addtocart');
            break;
            
        case 'billcart' :

            include ('admin/cart/bill.php');
            
            break;
            // Tạo bill
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

            case 'billcomform' :
                if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                    if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                    else $id=0;
                    $bill_name = $_POST['name'];
                    $bill_email = $_POST['email'];
                    $bill_address = $_POST['address'];
                    $bill_tel = $_POST['tel'];
                    $bill_pttt = $_POST['bill_pttt']; 
                    $ngaydathang = date(' h:i:sa d/m/Y ');
                    $total = tongdonhang();
                    $bill_img = img();
                    $bill_namedh = name();
                
                    $idbill = insert_bill($iduser,$bill_name, $bill_email, $bill_address, $bill_tel,$bill_pttt, $ngaydathang,$total,$bill_img,$bill_namedh);
                

                    foreach ($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }

                }
                $listbill = hienthibill($idbill);
                include('admin/cart/billcomform.php');
                
                unset($_SESSION['mycart']);

                break;
            
            case 'mybill' :
                $listbill = hienthimybill($_SESSION['user']['id']);
                include ('admin/cart/mybill.php');
                break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
ob_end_flush();
?>
