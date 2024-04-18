<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo _PATH_ROOT.'/assets/admin/main_admin.css'?>">
    <link rel="stylesheet" href="<?php echo _PATH_ROOT.'/assets/admin/style.css'?>">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <h1> Admin </h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="<?php echo _WEB_ROOT.'/admin/index' ?>">Trang chủ</a></li>
                <li><a href="<?php echo _WEB_ROOT.'/danhmuc/list' ?>">Danh mục</a></li>
                <li><a href="<?php echo _WEB_ROOT.'/sanpham/list' ?>">Hàng hóa</a></li>
                <li><a href="<?php echo _WEB_ROOT.'/khachhang/list'?>">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=bill">Đơn hàng</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="<?php echo _WEB_ROOT.'/group/list' ?>">Nhóm người dùng</a></li>
            </ul>
        </div>