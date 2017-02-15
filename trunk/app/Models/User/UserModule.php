<?php
/**
 * Created by PhpStorm.
 * User: huangchen
 * Date: 2017/2/15
 * Time: 16:35
 */

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;

class UserModule extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user_modules';

    /**
     * 表主键名
     * @var string
     */
    protected $primaryKey = 'user_module_id';
}