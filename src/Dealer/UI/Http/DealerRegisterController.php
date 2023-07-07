<?php

namespace Carnomaly\Dealer\UI\Http;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DealerRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:dealers')->except('logout');
    }

    public function renderRegisterForm()
    {
        return view('dealer::registrationForm', ['page_title' => '::: Dealers Registration :::']);
    }

    public function postAction(Request $request)
    {

    }

    protected function guard()
    {
        return Auth::guard('employee');
    }
}
