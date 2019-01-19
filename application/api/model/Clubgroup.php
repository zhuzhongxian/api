<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 10:53
 */

namespace app\api\model;




class Clubgroup extends BaseModel
{
    /**
     * getGroupByID   根据id得到分组名
     * @var array
     */
    protected $hidden = ['topic_img_id'];

    public function img(){
        return $this->belongsTo('Clubimg','topic_img_id','id');
    }


    public static function getGroupByID($id){
        $Group = self::with('img')->find($id);
        return $Group;
    }

}