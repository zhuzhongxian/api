<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/14/014
 * Time: 15:07
 */

namespace app\lib\exception;


class MemberMissException extends BaseException
{
    public $code = '404';
    public $msg = '请求小组成员信息不存在';
    public $errorCode = '10001';
}