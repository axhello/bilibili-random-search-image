<?php
	header("Content-type: application/json;charset=utf-8");
	$url = 'http://www.bilibili.com/index/index-icon.json';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_ENCODING, "application/json"); //添加此项设置json编码，否则返回乱码；
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$json = curl_exec($ch);
	curl_close($ch);
	print_r($json);
