<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index (){

        
		$data = array(  'title'     => 'welcome admin',
                        'content'   => 'user/dasboard/index'
                    );
        return view('layout/wrapper',$data);
    }
}
