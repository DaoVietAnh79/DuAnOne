<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "../da1/view/header.php";

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case "acc":
            include "view/accounts.php";
            break;
        case "register":
            if (isset($_POST['submit'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user,$email,$pass);
                header('Location: index.php?act=login');
            }
            include "view/login/register.php";
            break;
        case "login":
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $taikhoan = dangnhap($_POST['user'],$_POST['pass']);
            }
            include "view/login/login.php";
            break;
    }
} else {
include "../da1/view/home.php";
}

include "../da1/view/footer.php";
?>
   

  
