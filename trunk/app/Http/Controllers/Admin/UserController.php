<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
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

    /**
     * 用户列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function userList()
    {
        return view('admin.user.userList');
    }


    /**
     * ajax 获取数据
     * @param \Request $request
     * @return string
     */
    public function getUsers(\Request $request)
    {
        $start = $request::input("start");
        $length = $request::input("length");
        $search = $request::input("search");
        $search = empty($search['value']) ? 'abc' : $search['value'];

        $users = array(
            array("a0" => 1, "a1" => 'zh001', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 2, "a1" => 'zh002', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 3, "a1" => 'zh003', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 4, "a1" => 'zh004', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 5, "a1" => 'zh005', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 6, "a1" => 'zh006', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 6, "a1" => 'zh007', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 7, "a1" => 'zh008', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 9, "a1" => 'zh009', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 10, "a1" => 'zh0010', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 11, "a1" => 'azh001', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 12, "a1" => 'azh002', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 13, "a1" => 'azh004', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 14, "a1" => 'azh005', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 15, "a1" => 'azh006', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 16, "a1" => 'azh007', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 17, "a1" => 'azh008', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 18, "a1" => 'azh009', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 19, "a1" => 'azh0010', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 20, "a1" => 'azh003', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 21, "a1" => 'bzh001', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 22, "a1" => 'bzh002', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 23, "a1" => 'bzh003', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 24, "a1" => 'bzh004', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 25, "a1" => 'bzh005', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 26, "a1" => 'bzh006', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 27, "a1" => 'bzh007', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 28, "a1" => 'bzh008', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
            array("a0" => 29, "a1" => 'bzh009', "a2" => '张兵', "a3" => '工作组', "a4" => '暂停', "a5" => '离线', "a6" => '135000000' . rand(1, 9)),
            array("a0" => 30, "a1" => 'bzh0010', "a2" => '黄琛', "a3" => '汽车组', "a4" => '正常', "a5" => '在线', "a6" => '139000000' . rand(1, 9)),
        );


        return json_encode(array(
            "recordsTotal" => count($users),  // necessary
            "recordsFiltered" => count($users),
            "data" => array_slice($users, $start, $length), // necessary
        ), JSON_UNESCAPED_UNICODE);
    }


    /**
     * 添加用户
     */
    public function addUser(\Request $request)
    {
        return view('admin.user.userInfo', ['name' => 'James']);

    }
}
