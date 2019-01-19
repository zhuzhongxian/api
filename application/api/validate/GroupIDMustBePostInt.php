<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 15:56
 */

namespace app\api\validate;


class GroupIDMustBePostInt extends BaseValidate
{
    protected $rule = [ //判断group_id
        'group_id' => 'require|isPostInteger'
    ];
}