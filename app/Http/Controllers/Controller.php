<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        return view('pelanggan.page.home',[
            'title' => 'home',
    ]);
    }
    public function shop()
    {
        return view('pelanggan.page.shop',[
            'title' => 'Shop',
    ]);
    }
    public function transaction()
    {
        return view('pelanggan.page.transaction',[
            'title' => 'Transaction',
    ]);
    }
    public function contact()
    {
        return view('pelanggan.page.contact',[
            'title' => 'Contact Us',
    ]);
    }

}
