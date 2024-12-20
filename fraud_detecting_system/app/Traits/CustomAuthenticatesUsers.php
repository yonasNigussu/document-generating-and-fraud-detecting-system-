namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait CustomAuthenticatesUsers
{
    use \Illuminate\Foundation\Auth\AuthenticatesUsers {
        login as defaultLogin;
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Get the credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            if(Auth::id())
    {
      if (Auth::user()->acc_status=='2') {
        return redirect()->back()->with('message', 'Your account is blocked.');
    }

        if(Auth::user()->usertype=='0')
        {
            return view('user.home');
            
        }
        else if(Auth::user()->usertype=='2'&&Auth::user()->acc_status=='1')
        {
          return view('cs_school.home');
        }
        else if(Auth::user()->usertype=='3'&&Auth::user()->acc_status=='1')
        {
          return view('it_school.home');
        }
        else if(Auth::user()->usertype=='4'&&Auth::user()->acc_status=='1')
        {
          $feedback=Feedback::all();
          return view('admin.home',compact('feedback'));
        }
        else if(Auth::user()->usertype=='6'&&Auth::user()->acc_status=='1')
        {
          return view('clerk.home');
        }
        else if(Auth::user()->usertype=='7'&&Auth::user()->acc_status=='1')
        {
          return view('clerk.home');
        }
        else
        {
            return view('registrar.home');
        }
    }
    else
    {
        return redirect()->back();
    }
        }

        // Invalid login attempt
        return $this->sendFailedLoginResponse($request);
    }
}
