<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('notifications.index');
    }

    public function index_data(Request $request)
    {
       $notification = Notification::all();
       return$notification;
    }
}
