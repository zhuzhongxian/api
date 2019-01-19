<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 15:53
 */

namespace app\lib\exception;


class InfoExMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求小组详细信息不存在';
    public $errorCode = 10000;
}