<?php
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
//var_dump($listInteger);
echo $listInteger->get(0);