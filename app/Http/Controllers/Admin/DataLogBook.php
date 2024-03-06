<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DataLogBook extends Controller
{
    public function index (){

        
		$data = array(  'title'     => 'Data Logbook',
                        'content'   => 'admin/data-logbook/index'
                    );
        return view('layout/wrapper',$data);
    }
}
