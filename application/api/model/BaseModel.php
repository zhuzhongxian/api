<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/15
 * Time: 16:09
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    /**
     *prefixImgUrl 将url拼接成完整路径
     * @param $value
     * @param $data
     * @return string
     */
    protected function prefixImgUrl($value,$data){
        $finalUrl = $value;
        if ($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }

}