<?php
/**
 * Created by PhpStorm.
 * User: huangchen
 * Date: 2017/2/15
 * Time: 14:31
 */

namespace App\Models\Group;


use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'group_members';

    /**
     * 表主键名
     * @var string
     */
    protected $primaryKey = 'group_members_id';

}