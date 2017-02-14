<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\UserInfo;
use App\Repositories\User\UserRepository;
use App\Transformers\UserInfoTransformer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Dingo\Api\Routing\Helpers;

class HomeController extends Controller
{
    use Helpers;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function home()
    {
        return view('admin.home');
    }
}
