<?php
/**
 * Created by PhpStorm.
 * User: huangchen
 * Date: 2017/1/17
 * Time: 13:51
 */

namespace App\Transformers;

use App\Models\User\UserInfo;
use League\Fractal\TransformerAbstract;

/**
 * Class UserTranformer
 * @package App\Transformers
 */

class UserInfoTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    protected $defaultIncludes = [];

    public function transform(UserInfo $user)
    {
        return [
            'username' =>2,
            'email' =>2,
        ];
    }
}
