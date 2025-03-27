<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // -------------------------------------------------
    // 1) Show Admin Login Form
    // -------------------------------------------------
    public function showAdminLoginForm()
    {
        return view('auth.login-admin'); 
    }

    // -------------------------------------------------
    // 2) Admin Login Logic
    // -------------------------------------------------
    public function adminLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) 
        {
            // Check if user has 'admin' role
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            } else {
                // If not admin, log out and show error
                auth()->logout();
                return redirect()->route('login.admin')
                                 ->with('error', 'Vous n\'êtes pas autorisé à accéder à l\'espace Admin');
            }
        } else {
            // Login failed
            return redirect()->route('login.admin')
                             ->with('error', 'Email ou mot de passe incorrect');
        }
    }

    // -------------------------------------------------
    // 3) Show Employee Login Form
    // -------------------------------------------------
    public function showEmployeeLoginForm()
    {
        return view('auth.login-employee');
    }

    // -------------------------------------------------
    // 4) Employee Login Logic
    // -------------------------------------------------
    public function employeeLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (auth()->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) 
        {
            // Check if user has 'employee' role (or something else)
            if (auth()->user()->role == 'employee') {
                return redirect()->route('home'); // or employee.dashboard
            } else {
                // If not employee, log out and show error
                auth()->logout();
                return redirect()->route('login.employee')
                                 ->with('error', 'Vous n\'êtes pas autorisé à accéder à l\'espace Employé');
            }
        } else {
            // Login failed
            return redirect()->route('login.employee')
                             ->with('error', 'Email ou mot de passe incorrect');
        }
    }

    // The existing 'login(Request $request)' method can stay if you still want a single fallback login route
    // or you can remove it if you're only using the two new routes.
}
