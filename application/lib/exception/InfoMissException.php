<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 11:43
 */

namespace app\lib\exception;


class InfoMissException extends BaseException
{
    /**
     *
     * @var string
     */
    public $code = '404';
    public $msg = '请求小组信息不存在';
    public $errorCode = '10000';
}