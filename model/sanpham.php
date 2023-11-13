<?php
function insert_sanpham($ten,$danhmuc,$gia,$mota,$anh){
    $sql = "insert into sanpham(name,iddm,price,mota,img) values('$ten','$danhmuc','$gia','$mota','$anh')";
    pdo_execute($sql);
}

function loadall_sanpham($kyw = "",$iddm = 0){
    $sql = "select * from sanpham where 1";

    if($kyw != ""){
        $sql .= " and name like '%$kyw%'";
    }

    if($iddm > 0){
        $sql .= " and iddm = $iddm";
    }

    $sql .= " order by iddm desc";
    $result = pdo_query($sql);
    return $result;
}

function delete_sanpham($id){
    $sql = "delete from sanpham where id =". $id;
    pdo_execute($sql);
}


function loadone_sanpham($id){
    $sql = "select * from sanpham where id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function update_sanpham($id,$tensp,$danhmuc,$gia,$mota,$anh){
    if($anh != ""){
        $sql = "update sanpham set name = '$tensp', iddm = $danhmuc, price = '$gia', mota = '$mota', img = '$anh' where id = '$id'";
    }else{
        $sql = "update sanpham set name = '$tensp', iddm = $danhmuc, price = '$gia', mota = '$mota' where id = '$id'";
    }
    
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
?>