<?php

namespace app\admin\model;

use think\Model;

class MenuRule extends Model
{
    protected $autoWriteTimestamp = 'int';

    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';

    protected static function onAfterInsert($model)
    {
        $pk = $model->getPk();
        $model->where($pk, $model[$pk])->update(['weigh' => $model[$pk]]);
    }
}