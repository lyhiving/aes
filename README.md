# AES encryption

php aes加解密简单应用。

## PHP与JS通信对称加解密通道

可见的问题，一旦JS端泄露密钥，这个加解密的就不是那么好玩了。不过作为一个不错的加密通信方式，比明文要强一点。速度也是杠杠的。



## 安装

使用 Composer

```json
{
    "require": {
            "lyhiving/aes": "1.0.*"
    }
}
```

## 用法

```php
<?php
use lyhiving\aes\aes;

$key = 'aKingoftheWorld';
$iv = '76abd3e3a42b41df';
$txt = '我是一段加密的话,ABCD1234。';
$aes = new aes($key, $iv, 'aes-128-cbc');

```
加密：

```php
<?php

$txt_en = $aes->encode($txt);
```

解密：

```php
<?php

$txt_de = $aes->decode($txt_en);
```

## 重点：$iv 要求必须是16位的。

所以，自己生成一个16位字符会更好点。 

比如： [生成一个16位的MD5](http://tool.chinaz.com/tools/md5.aspx)  
 
