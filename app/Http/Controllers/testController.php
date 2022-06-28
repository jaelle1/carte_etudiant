<?php

namespace App\Http\Controllers;

use App\Mail\Testmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class testController extends Controller
{
public function _construct()
{
this->middleware('auth')->except('bar');

}
    public function foo()
{
if(!Gate::allows('access_admin')){
    abort('403');
}
return view('test.foo');
}


public function bar()
{
Mail::to ('naboure@gmail.com')->send('new Testmail()');
return view('test.bar');
}
}




