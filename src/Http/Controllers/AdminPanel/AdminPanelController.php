<?php

namespace Qodehub\TicketingApp\Http\Controllers\AdminPanel;
  
use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{
    
    public function dashboard()
    {   
        return view('qh-tickets::admin.dashboard');
    }

}