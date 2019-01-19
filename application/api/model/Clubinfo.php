<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 11:46
 */

namespace app\api\model;





class Clubinfo extends BaseModel
{
    /**
     * getInfoByGroupID 根据group_id得到人员简要信息
     * @var array
     */
    public $hidden = ['username','password','login_img_id','year','group_id'];
    public function img(){
        return $this->belongsTo('Clubimg','login_img_id','id');
    }


    public static function getInfoByGroupID($group_id){
        $Info = self::where('group_id','=',$group_id)->with('img')->select();
        return $Info;
    }

    public  function details() {
        return $this->hasMany('ClubinfoEx','info_id','id');
    }


    public static function getInfoByMemberID($id){
        $Info = self::with('img,details')->find($id);
        return $Info;
    }


    public static function getInfoByMemberDetail($id)
    {
        $memberInfo = self::getInfoByMemberID($id);
        $details = self::details($id);
        $detail = array('details' => $details);
        return array_merge($memberInfo, $detail);
    }


}