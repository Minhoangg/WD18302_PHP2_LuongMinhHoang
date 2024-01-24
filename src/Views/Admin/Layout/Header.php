<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ADMIN - BOOKSTORE</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="<?php __DIR__ ?>/public/Admin/css/feathericon.min.css">
    <link rel="stylesheet" href="<?php __DIR__ ?>/public/Admin/css/style.css">

</head>

<body>
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="<?= ROOT_URL ?>/Dashboard" class="logo"><span class="logoclass">BookStore</span> </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fa-solid fa-bars"></i></a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img
                                class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31"
                                alt="Soeng Souy"></span> </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm"><img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                                                           class="avatar-img rounded-circle"></div>
                        <div class="user-text">
                            <h6>Soeng Souy</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="../../../../index.php">My Profile</a> <a class="dropdown-item"
                                                                                            href="../../../../index.php">Account
                        Settings</a> <a class="dropdown-item"
                                        href="../../../../index.php">Logout</a>
                </div>
            </li>
        </ul>
        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active"><a href="<?= ROOT_URL ?>/home"><i class="fas fa-tachometer-alt"></i>
                            <span>Quản lý sách</span></a></li>

                </ul>
            </div>
        </div>
    </div>

