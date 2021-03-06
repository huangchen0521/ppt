<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class GroupInfo extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * 表主键名
     * @var string
     */
    protected $primaryKey = 'group_id';


}
