<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/7/14
 * Time: 10:47
 */

namespace app\api\controller;

use app\api\model\Clubgroup as ClubgroupModel;
use app\api\validate\IDMustBePostInt;
use app\lib\exception\GroupMissException;

class Clubgroup
{
    /**
     * url     club/group/1
     * @param $id
     * @return \think\response\Json
     * @throws GroupMissException
     */
    public function getClubgroup($id){
        (new IDMustBePostInt())->goCheck();

        $Group = ClubGroupModel::getGroupByID($id);
            if(!$Group){
                throw new GroupMissException();
            }

            return json($Group);
    }
}