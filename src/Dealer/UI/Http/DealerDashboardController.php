<?php

namespace Carnomaly\Dealer\UI\Http;

use App\Http\Controllers\Controller;

class DealerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealers');
    }

    public function index()
    {
        return view('dealer.dashboard');
    }
}
