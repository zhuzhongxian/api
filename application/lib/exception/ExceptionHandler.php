<?php

/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/13
 * Time: 18:41
 */
namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    /**
     * render 对异常进行重写
     * recordErrorLog 将服务器错误记入日志
     * @var
     */
    private  $code;
    private  $msg;
    private  $errorCode;
    public function render(\Exception $e)//这里我们使用基类的Exception这样就不会报两个错
    {
        if ($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

        }
        else{
            if(config('app_debug')){//如果是开发模式
                return parent::render($e);//返回tp5自带的
            }
            else{
            $this->code = 500;
            $this->msg = '服务器错误';
            $this->errorCode = 999;
            $this->recordErrorLog($e);//如果报系统错误则记入日志
            }
        }
        $request = Request::instance();

        $result = [
            'msg' => $this->msg,
            'error_code' =>$this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result,$this->code);
    }

    private function  recordErrorLog(\Exception $e){//这里我们使用基类的Exception这样就不会报两个错
        Log::init([
                'type' => 'File',
                'path' => 'LOG_PATH',
                'level' => ['error']
        ]);
        Log::record($e->getMessage(),'error');
    }

}