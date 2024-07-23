<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">
<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/cart.php";
include "header.php";

// Control Panel
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
                
        case 'admin':

            include 'admin/index.php';
            break;

        case 'adddm':
            // Kiểm tra xem người dùng có nhấn vào nút "Thêm mới" hay không
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                echo '<script>
                Swal.fire({
                    title: "Thành công!",
                    text: "Thêm danh mục thành công!",
                    icon: "success"
                  }).then(function() {
                    window.location.href = "http://localhost:8080/Teelab/admin/index.php?act=listdm";
                });
                  </script>';
                }
            include 'danhmuc/add.php';
            break;
            
        //------------------ Hiển thị danh sách------------------
        
        case 'listdm':
            $listdanhmuc = hienthidanhmuc();
            include 'danhmuc/list.php';
            break;
            
        //------------------ Xóa danh mục------------------

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            echo '<script>
            Swal.fire({
                title: "Thành công!",
                text: "Xóa danh mục thành công!",
                icon: "success"
              });
              </script>';
            $listdanhmuc = hienthidanhmuc();
            include 'danhmuc/list.php';
            break;
            
        //------------------ Sửa danh mục------------------

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = sua_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
            
        //------------------ Cập nhật danh mục------------------

        case 'updatedm':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                echo '<script>
                Swal.fire({
                    title: "Thành công!",
                    text: "Update danh muc thành công!",
                    icon: "success"
                  });
                  </script>';
            }
            $listdanhmuc = hienthidanhmuc();
            include 'danhmuc/list.php';
            break;


        //================= Controller sản phẩm ==========================
        
case 'addsp':
    if (isset($_POST['themmoi']) && $_POST['themmoi']) {
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $motasp = $_POST['motasp'];

        $hinhsp = $_FILES['hinhsp']['name'];
        $target_dir = "../upload/"; // Đường dẫn thư mục lưu ảnh chính
        $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
        
        $hinhspHover = $_FILES['hinhspHover']['name'];
        $target_dir_hover = "../upload2/"; // Đường dẫn thư mục lưu ảnh hover
        $target_file_hover = $target_dir_hover . basename($_FILES["hinhspHover"]["name"]);


        if (!is_numeric($giasp)) {
            echo '<script>
                Swal.fire({
                    title: "Lỗi!",
                    text: "Vui lòng nhập giá tiền là một số.",
                    icon: "error"
                }).then(function() {
                    window.location.href = "http://localhost:8080/Teelab/admin/index.php?act=addsp";
                });
                </script>';
            break;
        }

        if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file) &&
            move_uploaded_file($_FILES["hinhspHover"]["tmp_name"], $target_file_hover)) {

            insert_sanpham($tensp, $giasp, $hinhspHover, $hinhsp, $motasp, $iddm);

        
            echo '<script>
                Swal.fire({
                    title: "Thành công!",
                    text: "Thêm sản phẩm thành công!",
                    icon: "success"
                }).then(function() {
                    window.location.href = "http://localhost:8080/Teelab/admin/index.php?act=listsp";
                });
                </script>';
        } else {

            echo '<script>
                Swal.fire({
                    title: "Lỗi!",
                    text: "Không thể tải lên hình sản phẩm.",
                    icon: "error"
                }).then(function() {
                    window.location.href = "http://localhost:8080/Teelab/admin/index.php?act=addsp";
                });
                </script>';
        }
    }
    $listdanhmuc = hienthidanhmuc();
    include 'sanpham/add.php';
    break;

        

        
            
        //------------------ Hiển thị danh sách sản phẩm------------------

        case 'listsp':
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = hienthidanhmuc();
            $listsanpham = hienthisanpham($kyw,$iddm);
            include 'sanpham/list.php';
            break;
            
        //------------------ Xóa sản phẩm --------------------------------
        
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // Check if 'id' is set and positive
                if (isset($_GET['confirmedDelete']) && $_GET['confirmedDelete'] == 'true') {
                    delete_sanpham($_GET['id']);
                    header("Location: http://localhost:8080/Teelab/admin/index.php?act=listsp");
                    exit();
                }
            }
        
            if (isset($_POST['listok']) && $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
        
            echo '<script>
                Swal.fire({
                    title: "Bạn đã suy nghĩ kĩ chưa?",
                    text: "Bạn không thể khôi phục sản phẩm này!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Có",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, redirect to delete with confirmation
                        window.location.href ="http://localhost:8080/Teelab/admin/index.php?act=xoasp&confirmedDelete=true&id=' . $_GET['id'] . '";
                    } else {
                        // If canceled, show a message
                        Swal.fire({
                            title: "Cancelled",
                            text: "Sản phẩm không bị xóa.",
                            icon: "info"
                        });
                    }
                });
            </script>';
        
            $listsanpham = hienthisanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;
        
        
            
        //------------------ Sửa sản phẩm --------------------------------

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = sua_sanpham($_GET['id']);
            }
            $listdanhmuc = hienthidanhmuc();
            include 'sanpham/update.php';
            
            break;
            
        // ------------------ Cập nhật sản phẩm ----------------------------
        case 'updatesp':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $id = $_POST["id"];
                $iddm = $_POST["iddm"];
                $tensp = $_POST["tensp"];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
        
                if (isset($_FILES['hinhsp']['name']) && !empty($_FILES['hinhsp']['name'])) {
                    $hinhsp = $_FILES['hinhsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($hinhsp);
        
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                    } else {
                        $thongbao = "Cập nhật không thành công. Có lỗi khi tải ảnh lên.";
                    }
                } else {
                    $hinhsp = '';
                }
        
                update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $hinhsp);
                echo '<script>
                    Swal.fire({
                        title: "Thành công!",
                        text: "Cập nhật sản phẩm thành công!",
                        icon: "success"
                      });
                      </script>';
            }
            $listdanhmuc = hienthidanhmuc();
            $listsanpham = hienthisanpham("", 0);
            include "sanpham/list.php";
            break;
        
            // -------------- Tài khoản -------------
            case 'dskh':
                $listtaikhoan = hienthitaikhoan();
                include 'taikhoan/list.php';
                break;

            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                echo '<script>
                Swal.fire({
                    title: "Thành công!",
                    text: "Xóa đơn hàng thành công!",
                    icon: "success"
                    });
                    </script>';

                    $listtaikhoan = hienthitaikhoan();
                    include 'taikhoan/list.php';
                break;
            
            // -------------- Bình luận -------------


            case 'dsbl':
                $listbinhluan = hienthibinhluan(0);
                include 'binhluan/list.php';
                break;    

            

            // thông kế
            case 'thongke':
                $listthongke = hienthithongke();
                include 'thongke/list.php';
                break; 


            case 'listbill';
                if(isset($_POS['kyw']) && ($_POST['kyw']!="")){
                        $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                $listallbill = hienthiallbill($kyw,0);
                include 'bill/list.php';
                break;

                
                // Thêm vào các chức năng cập nhật đơn hàng tương tự như sản phẩm
                case 'updatebill':
                    if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                        $bill_status = $_POST["updatebill"]; // Đã sửa tên trường
                        $id = $_POST["id"];
                        // Gọi hàm cập nhật tình trạng đơn hàng với $newStatus
                        updateTrangThaiDonHang($bill_status, $id);
                        // Chuyển hướng hoặc thực hiện các công việc khác sau khi cập nhật
                        echo '<script>
                            Swal.fire({
                                title: "Thành công!",
                                text: "Cập nhật đơn hàng thành công!",
                                icon: "success"
                            });
                        </script>';
                    }
                    $listallbill = hienthiallbill();
                    include('bill/list.php');
                    break;

                    case 'xoabill':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            delete_bill($_GET['id']);
                        }
                        echo '<script>
                        Swal.fire({
                            title: "Thành công!",
                            text: "Xóa đơn hàng thành công!",
                            icon: "success"
                          });
                          </script>';

                        $listallbill = hienthiallbill();
                        include 'bill/list.php';
                        break;
                    
            default:
                include 'home.php';
                break;
            
    }
} else {
    include "home.php";
}
include "footer.php";
?>
<?php
ob_end_flush();
// ... rest of your code ...
?>