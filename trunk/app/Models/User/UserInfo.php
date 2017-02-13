<?php
/**
 * Created by PhpStorm.
 * User: huangchen
 * Date: 2017/2/11
 * Time: 13:41
 */

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserInfo extends Model
{
   // use SoftDeletes;
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 模型的日期字段保存格式。
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['price'];

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
   // protected $dates = ['deleted_at','created_at','updated_at'];


}