<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/13
 * Time: 19:37
 */

namespace app\api\validate;



class IDMustBePostInt extends BaseValidate
{
    protected $rule = [ //判断id
        'id' => 'require|isPostInteger'
    ];
}