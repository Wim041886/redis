<?php

	include './Cart.class.php';

	$cartObj = new Cart;


	$gid =  @intval($_GET['gid']);

	// $cartObj->addToCart($gid);
	$cartObj->showCartList($gid);

	// echo '<pre>';
	// print_r($cartObj->redis);