<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index (){
      
        
		$data = array(  'title'     => 'welcome admin',
                        'content'   => 'admin/dashboard/index'
                    );
        return view('layout/wrapper',$data);
    }
}
