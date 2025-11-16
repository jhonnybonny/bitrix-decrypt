<?php

// $key = COption::GetOptionString("main", "pwdhashadd", "");

class CAllMailUtil
{
    public static function ByteXOR($a, $b, $l)
    {
        $c = "";
        for ($i = 0; $i < $l; $i++)
        {
            if (isset($a[$i]) && isset($b[$i]))
                $c .= $a[$i] ^ $b[$i];
        }

        return $c;
    }

    public static function BinMD5($val)
    {
        return(pack("H*",md5($val)));
    }

    public static function Decrypt($str, $key=false)
    {
        $res = '';
        $key1 = CAllMailUtil::BinMD5($key);
        $str = base64_decode($str);
        while (strlen($str) > 0)
        {
            $m = substr($str, 0, 16);
            $str = substr($str, 16);
            $m = CAllMailUtil::ByteXOR($m, $key1, 16);
            $res .= $m;
            $key1 = CAllMailUtil::BinMD5($key.$key1.$m);
        }
        return $res;
    }

    public static function Crypt($str, $key=false)
    {
        $res = '';
        $key1 = CAllMailUtil::BinMD5($key);
        while (strlen($str) > 0)
        {
            $m = substr($str, 0, 16);
            $str = substr($str, 16);
            $res .= CAllMailUtil::ByteXOR($m, $key1, 16);
            $key1 = CAllMailUtil::BinMD5($key.$key1.$m);
        }
        return(base64_encode($res));
    }
}

$new_argv = str_replace('+', '%2B', $argv[1]);
parse_str($new_argv, $arg);

// "k13+oeFlyyGe"
echo CAllMailUtil::Decrypt($arg['pass'] ?? '', $arg['salt'] ?? null);
echo "\n";