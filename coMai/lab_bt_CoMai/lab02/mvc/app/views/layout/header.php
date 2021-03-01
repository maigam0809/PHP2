<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FPOLY</title>
	<link rel="stylesheet" href="public/client/css/css2.css">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="topmenu">
			<ul>
				<li><a href="">Đăng nhập</a></li>
				<li><a href="">Đăng kí</a></li>
				<li><a href="">Quên mật khẩu</a></li>
			</ul>
		</div>
	</div>
	<div id="menu">
		<ul>
			<?php foreach($cateNames as $a):?>
			<li><a href=""><?=$a->cate_name?></a></li>
			<?php endforeach;?>
		</ul>
    </div>	