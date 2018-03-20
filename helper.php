<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.03.18
 * Time: 19:31
 */

class helper{

    public static function incOffset(){
        $fp = fopen("offset.txt","r");
        $offset = (int)fgets($fp);
        fclose($fp);
        $fp = fopen("offset.txt","w");
        fwrite($fp,++$offset);
        fclose($fp);
    }




    public static function decOffset($test = false)
    {
        $fp = fopen("offset.txt","r");
        $offset = (int)fgets($fp);
        fclose($fp);
        $fp = fopen("offset.txt","w");
        fwrite($fp,--$offset);
        fclose($fp);
    }

    public static function getTimeOffset(){
        $fp = fopen("offset.txt","r+");
        $nOffset = (int)fgets($fp);
        fclose($fp);
        return $nOffset;
    }
}
