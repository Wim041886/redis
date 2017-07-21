<?php

	include './Cart.class.php';

	$cartObj = new Cart;


	$gid =  @intval($_GET['gid']);

	$num = $_GET['num'];
	// echo $num;

	$cartObj->addToCart($gid, $num);


