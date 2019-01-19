<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/13
 * Time: 18:22
 */
namespace app\api\validate;


    use app\lib\exception\ParameterException;
    use think\Request;
    use think\Validate;


    class BaseValidate extends Validate{
        public function goCheck(){//封装的检查方法
            //获取参数并校验
            $request = Request::instance();
            $params = $request->param();//获取参数
            $result = $this->batch()->check($params);//批量验证
            if(!$result){
                $e = new ParameterException([
                    'msg' => $this->error,
                ]);
                throw $e;
            }
            else{
                return true;
            }
        }

        protected function isPostInteger($value, $rule = '', $data = '', $field = '')//验证是不是正整数
        {
            if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
                return true;
            } else {
                return false;//这里将返回值改为false，如果返回字符串的话，后边会认为他是成功
            }
        }
    }