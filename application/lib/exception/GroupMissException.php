<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 10:49
 */

namespace app\lib\exception;


class GroupMissException extends BaseException
{
    /**
     * @var int
     */
    public $code = 400;
    public $msg = '请求Group不存在';
    public $errorCode = '10000';
}