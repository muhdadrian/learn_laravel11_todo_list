<?php

namespace App\Http\Controllers\Hello;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $name = 'Adrian';
        $data = ['namePerson' => $name];
        return view('test.hello', $data);
    }
}
 