<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //
    public function index(Request $request)
    { 
        $page = [
        'name'      =>  'Calendar',
        'title'     =>  'Calendar',
        'crumb'     =>  array(
        "Index" => '/feedbacks/show',
        "" => ''
        )
        ];

         return view('calendar.index', compact('page'));
    }
}
