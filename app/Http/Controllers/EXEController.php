<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class EXEController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Registration page
     */
    public function exeLogin()
    {
        return view('exe1.login');  
    }
    public function exeRegister()
    {
        return view('exe1.register');
    }
    public function exeList(Request $request)
    {
        $username = $request->input('username'); // Lấy username từ form
        $password = $request->input('password'); // Lấy username từ form
        return view('exe1.list', compact('username'));
    }
    public function exeView()
    {
        return view('exe1.view');
    }
    public function exeUpdate()
    {
        return view('exe1.update');
    }
    public function exeIndex()
    {
        return view('exe1.indexexe');
    }


}
