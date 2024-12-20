<?php
use App\Http\Middleware\ForcePasswordChange;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware(ForcePasswordChange::class)->only('login'); // Add this line
    }

    // Rest of the LoginController code...
}