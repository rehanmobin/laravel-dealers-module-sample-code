<?php

namespace Carnomaly\Dealer\UI\Http;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DealerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:dealers')->except('logout');
    }

    public function renderLoginForm()
    {
        return view('dealer::login', ['page_title' => '::: Dealers Login :::']);
    }

    protected function guard()
    {
        return Auth::guard('employee');
    }
}
