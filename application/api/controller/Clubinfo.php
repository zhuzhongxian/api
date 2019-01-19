<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 11:38
 */

namespace app\api\controller;


use app\api\model\Clubinfo as ClubinfoModel;
use app\api\validate\GroupIDMustBePostInt;
use app\api\validate\IDMustBePostInt;
use app\lib\exception\InfoExMissException;
use app\lib\exception\InfoMissException;

class Clubinfo
{
    /**
     * url    club/list?group_id=1
     * @param $group_id
     * @return \think\response\Json
     * @throws InfoMissException
     */

    public function getClubinfo($group_id){
        (new GroupIDMustBePostInt())->goCheck();

        $Info = ClubinfoModel::getInfoByGroupID($group_id);

        if(!$Info){
            throw new InfoMissException();
        }
        $Info = $Info->hidden(['introduction','stauts','work_job','feeling']);
        return json($Info);
    }

    public function  getMemberinfo($id) {
        (new IDMustBePostInt())->goCheck();
        $Info = ClubinfoModel::getInfoByMemberID($id);
        if(!$Info){
            throw new MemberMissException();
        }
        return json($Info);
    }


}