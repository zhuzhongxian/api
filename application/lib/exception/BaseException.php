<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/13
 * Time: 18:42
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    /**
     * __construct 用构造方法将传递的报错信息进行替换
     * @var int|mixed
     */
    public $code = 400;

    public $msg = '参数错误';

    public $errorCode = 10000;

    public function __construct($params = [])
    {
        if (!is_array($params)){
            return;
        }
        if (array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
        if (array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }
    }

}