<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/7
 * Time: 9:46
 */

namespace app\api\controller\v2;

class Banner {

    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @$id banner的id号
     */
    public function getBanner($id)
    {
        return 'version v2';

    }
}