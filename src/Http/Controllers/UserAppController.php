<?php

namespace Qodehub\TicketingApp\Http\Controllers;
 
use App\User;
use App\Http\Controllers\Controller;

class UserAppController extends Controller
{
    
    public function index()
    {   
    	$user = User::first();

        return view('qh-tickets::user.index', compact('user'));
    }

}