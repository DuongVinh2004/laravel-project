<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signin');
    }

    public function checkSignIn(Request $request)
    {
        $username  = trim((string) $request->input('username'));
        $password  = (string) $request->input('password');
        $repass    = (string) $request->input('repass');
        $mssv      = trim((string) $request->input('mssv'));
        $lopmonhoc = trim((string) $request->input('lopmonhoc'));
        $gioitinh  = trim((string) $request->input('gioitinh'));

        if ($password !== $repass) {
            return response('Đăng ký thất bại');
        }

        $student = [
            'username'  => 'Vinhdx',
            'password'  => '123456',
            'mssv'      => '0309867',
            'lopmonhoc' => '67PM2',
            'gioitinh'  => 'nam',
        ];

        $ok =
            $username  === $student['username'] &&
            $password  === $student['password'] &&
            $mssv      === $student['mssv'] &&
            $lopmonhoc === $student['lopmonhoc'] &&
            $gioitinh  === $student['gioitinh'];

        return response($ok ? 'Đăng ký thành công!' : 'Đăng ký thất bại');
    }
}
