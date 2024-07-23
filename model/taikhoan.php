<?php
if (!function_exists('insert_taikhoan')) {
    function insert_taikhoan($email, $user, $pass, $img,$address,$tel)
    {
        $sql = "insert into taikhoan (email,user,pass,img,address,tel) values('$email','$user','$pass','$img','$address','$tel')";
        pdo_execute($sql);
    }
}

if (!function_exists('hienthitaikhoan')) {
    function hienthitaikhoan()
    {
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
}


if (!function_exists('checkemail')) {
    function checkemail($email, $pass)
    {
        $sql = "select * from taikhoan WHERE email='" . $email . "' AND pass='" . $pass . "'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
}
if (!function_exists('update_password')) {
    function update_password($email, $pass)
    {
        $sql = "UPDATE taikhoan SET pass = :pass WHERE email = :email";
        $params = array(':pass' => $pass, ':email' => $email);

        pdo_execute($sql, $params);
        
    }
}
if (!function_exists('delete_taikhoan')) {
    function delete_taikhoan($id){
        $sql = "delete from taikhoan where id=".$_GET['id'];
        pdo_execute($sql);
    }
}


?>
