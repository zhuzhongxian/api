<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 11:20
 */

namespace app\api\model;


use think\Model;

class Clubimg extends BaseModel
{
    /**
     * getUrlAttr 是获取器 第一个参数是数据库中的Url 第二个是所有数据
     * @var array
     */
    protected $hidden = ['id','from'];

    public function getUrlAttr($value,$data){
        return  $this->prefixImgUrl($value,$data);
    }
}