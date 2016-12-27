<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Validator;

class ChangePasswordController extends Controller
{

    /**
     * ChangePasswordController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Response
     */
    public function show()
    {
        return redirect('tai-khoan/cai-dat#doi-mat-khau');
    }

    protected function validateChangeRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_old' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    }

    protected function findUserOrFail($token)
    {
        $users = User::whereRememberToken($token);

        if ($users->count() != 1) {
            abort(500);
        }

        return $users->first();
    }

    protected function checkPasswordOrFail($user, $password)
    {
        if (!\Hash::check($password, $user->password)) {
            return back()->withErrors(['password_old' => 'Sai mật khẩu cũ'])->withInput();
        }
    }

    public function change($token, Request $request)
    {
        $this->validateChangeRequest($request);

        $user = $this->findUserOrFail($token);

        $this->checkPasswordOrFail($user, $request->password_old);

        $user->password = \Hash::make($request->password);
        $user->remember_token = str_random(10);
        $user->activated = true;
        $user->save();

        \Session::flash('toastr', [
            ['title' => 'Đổi mật khẩu', 'message' => 'Đổi mật khẩu thành công', 'level' => 'success']
        ]);
        return redirect()->route('home');
    }
}
