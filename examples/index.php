<?php
include __DIR__ . '/../autoload.php';

use lyhiving\aes\aes;

$key = 'aKingoftheWorld';
$iv = '76abd3e3a42b41df';
$txt = '我是一段加密的话,ABCD1234。';
$aes = new aes($key, $iv, 'aes-128-cbc');

$txt_en = $aes->encode($txt);
var_dump($txt_en);

$txt_de = $aes->decode($txt_en);
var_dump($txt_de);

if ($txt_de == $txt) {
    echo "成功加密解密";
} else {
    echo "解密失败";
}
