<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/13
 * Time: 20:40
 */

namespace app\lib\exception;




class ParameterException extends BaseException
{
    /**
     * @var int
     */
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = '10000';
}