<?php
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan, $img2){
    $sql = "INSERT INTO binhluan (noidung, iduser, idpro, ngaybinhluan, img2) VALUES ('$noidung', '$iduser', '$idpro', '$ngaybinhluan', '$img2')";
    pdo_execute($sql);

}
function hienthibinhluan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if ($idpro > 0) {
        $sql .= " AND idpro='" . $idpro . "'";
    }
    $sql .= " ORDER BY id DESC";

    $listdsbl = pdo_query($sql);
    return $listdsbl;
}

function hienthiallbl($idpro){
    $sql = "SELECT * FROM binhluan AS BL INNER JOIN taikhoan AS TK ON BL.iduser = TK.id WHERE idpro = $idpro;";
    $sql.= "oder by id desc";
    $listdsbl = pdo_query($sql);
    return $listdsbl;
}
