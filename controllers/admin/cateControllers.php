
<?php
if(isset($_GET['del'])){
    delCate($_GET['del']);
}
$getAllCate=getAllCate();
if(isset($_GET['type1'])){
    if($_GET['type1']=='fixcate'){
        if(isset($_POST['btn-save-cate'])){
            updateCate($_POST['tenTheLoai'],$_GET['id']);
        }
        $getNameCateById=getNameCateById($_GET['id']);
        include_once("views/admin/fixcate.views.php");
    }else if($_GET['type1']=='addcate'){
        if(isset($_POST['btn-add-cate'])){
            addCate($_POST['tenTheLoai']);
        }
        include_once("views/admin/addcate.views.php");
    }
}else{
    include_once("views/admin/cate.views.php");
}