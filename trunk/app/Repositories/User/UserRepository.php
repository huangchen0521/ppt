<?php
namespace App\Repositories\User;

use App\Models\User\UserInfo;
use App\Repositories\BaseRepository;
use App\Transformers\UserInfoTransformer;
use App\Transformers\UserTransformer;
use Fractal;

/**
 * Created by PhpStorm.
 * User: huangchen
 * Date: 2017/2/11
 * Time: 10:03
 */
class UserRepository extends BaseRepository implements UserRepositoryContract
{

    const  CREATED = 'created';
    const UPDATED = 'updated';
    const DELETED = 'deleted';


    /**
     * @param UserInfo $user
     * @return \Dingo\Api\Http\Response
     */
    function getUser()
    {
        $users = UserInfo::all();
        return Fractal::collection($users, new UserInfoTransformer());
    }
}