<?php

$domain = $_REQUEST["domain"];
$op = $_REQUEST["op"];


$data = array(
	"domain" => $domain,
	"op"     => $op

);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://lp-crm.biz/create/check_domain.php');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest"));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);


print_r($out);