<?php
function load_binhluan($idpro = 0){
    $sql = "select * from binhluan where 1";

    if($idpro > 0){
        $sql .= " and idpro = $idpro";
    }

    $sql .= " order by id desc";
    $result = pdo_query($sql);
    return $result;
}

function delete_binhluan($id){
    $sql = "delete from binhluan where id = '$id'";
    pdo_execute($sql);
}

function loadall_binhluan($idsp){
    $sql = "
        SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
        LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
        LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
        WHERE sanpham.id = $idsp;
    ";
    $result =  pdo_query($sql);
    return $result;
}

function insert_binhluan($idpro,$iduser, $noidung){
    $sql = "
        INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`) 
        VALUES ('$noidung','$iduser','$idpro');
    ";
    // echo $sql;
    // die;
    pdo_execute($sql);
}
?>