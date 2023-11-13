<?php
function insert_taikhoan_admin($username,$pass,$email,$address,$tel,$role){
    $sql = "insert into taikhoan(user,pass,email,address,tel,role) values('$username','$pass','$email','$address','$tel','$role')";
    pdo_execute($sql);
}

function loadall_taikhoan($kyw = "",$iddm = 0){
    $sql = "select * from taikhoan where 1";
    $result = pdo_query($sql);
    return $result;
}

function delete_taikhoan($id){
    $sql = "delete from taikhoan where id = '$id'";
    pdo_execute($sql);
}

function loadone_taikhoan($id){
    $sql = "select * from taikhoan where id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function update_taikhoan($id,$user,$pass,$email,$address,$tel,$role){
    $sql = "update taikhoan set user = '$user', pass = $pass, email = '$email', address = '$address', tel = '$tel', role = '$role' where id = '$id'";
    pdo_execute($sql);
}

function insert_taikhoan($user,$email,$pass){
    $sql="INSERT INTO `taikhoan` ( `user`,`email`, `pass`) VALUES ('$user', '$email','$pass'); ";
    pdo_execute($sql);
}

function dangnhap($user,$pass) {
    $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
    $taikhoan = pdo_query_one($sql);

    return $taikhoan;
}

function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['role']);
        unset($_SESSION['user']);
    }
}

function check_email($email) {
    $sql="SELECT * FROM taikhoan WHERE email='$email'";
    $result = pdo_query_one($sql);

    if($result){
        return true;
    }else{
        return false;
    }
}

function check_user($username) {
    $sql="SELECT * FROM taikhoan WHERE user='$username'";
    $result = pdo_query_one($sql);

    if($result){
        return true;
    }else{
        return false;
    }
}


function get_user($user){
    $sql = "select * from taikhoan where user = '$user'";
    $result = pdo_query_one($sql);
    return $result;
}

function update_user($id,$pass,$email,$address,$tel){
    $sql = "update taikhoan set pass = $pass, email = '$email', address = '$address', tel = '$tel' where id = '$id'";
    pdo_execute($sql);
    return "Cập nhật thông tin thành công";
}
?>