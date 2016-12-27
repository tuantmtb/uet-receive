<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/trang-chu';

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        \Session::flash('toastr', [
            ['title' => 'Thông báo', 'message' => 'Đăng nhập thành công', 'level' => 'success']]);
        if (!$user->activated) {
            // TODO: Thay thế bằng việc validate
//            $this->guard()->logout();
            \Session::flash('toastr', [
                ['title' => 'Cảnh báo', 'message' => 'Mật khẩu đang dùng là mặc định, bạn nên đổi mật khẩu', 'level' => 'warning']
            ]);
//            return redirect()->route('login');
        }
    }
}
