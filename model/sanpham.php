    
    <?php
        
        //---------------- thêm sản phẩm ---------------------------
        function insert_sanpham($name,$price,$img,$img2,$mota,$iddm){
            $sql = "insert into sanpham (name,price,img,img2,mota,iddm) values('$name','$price','$img','$img2','$mota','$iddm')";
            pdo_execute($sql);
        }
        
        function hienthisanpham_home(){
            $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 14";
            $listsanpham = pdo_query($sql);
            return  $listsanpham;
        }
        function hienthisanpham_sp(){
            $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 10";
            $listsanpham = pdo_query($sql);
            return  $listsanpham;
        }
        
        function hienthisanpham($kyw, $iddm) {
            $sql = "SELECT * FROM sanpham WHERE 1";
            if ($kyw != "") {
                $sql .= " AND name LIKE '%" . $kyw . "%'";
            }
            if ($iddm > 0) {
                $sql .= " AND iddm = " . $iddm;
            }
            $sql .= " ORDER BY name";   
            
            // tìm kiếm chuỗi $sql. = 

            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function hienthisanpham_top5(){
            $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 5";
            $listsanpham = pdo_query($sql);
            return  $listsanpham;
        }

        function load_ten_dm($iddm){
            if($iddm>8){
                $sql = "select * from danhmuc where id=".$iddm;
                $dm = pdo_query_one($sql);
                extract($dm);
                return $name;
            }else{
                return "";
            }
        }

        function delete_sanpham($id){
            $sql = "delete from sanpham where id=".$id;
            pdo_execute($sql);
        }

        function sua_sanpham($id){
            $sql = "select * from sanpham where id=".$id;
            $sanpham = pdo_query_one($sql);
            return $sanpham;
        }

        function update_sanpham($id, $iddm, $tensp, $giasp, $motasp, $hinhsp)
        {
            if ($hinhsp != "") {
                $sql = "UPDATE sanpham SET iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$motasp."', img = '".$hinhsp."' WHERE id =" . $id;
            } else {
                $sql = "UPDATE sanpham SET iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$motasp."' WHERE id =" . $id;
            }
            pdo_execute($sql);
        }
    
