<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Entreprise; // Add this line for the Entreprise model
use Illuminate\Support\Facades\Hash;

class EntrepriseAuthController extends Controller
{
    /**
     * Show the login form for entreprise users.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.entreprise.login');
    }

    /**
     * Handle entreprise user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::guard('entreprise')->attempt($credentials, $request->filled('remember'))) {
            // Authentication passed for entreprise user
            return redirect()->intended('offres/index');
        }


        // Authentication failed for entreprise user
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email', 'remember'));
    }


    public function showRegistrationForm()
    {
        return view('auth.entreprise.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:entreprises',
            'password' => 'required|string|min:8|confirmed',
            'adresse' => 'required|string', // Add validation for the new fields
            'domaine' => 'required|string',
            'description' => 'required|string',
        ]);

        // Create a new enterprise
        $entreprise = new Entreprise();
        $entreprise->name = $request->input('name');
        $entreprise->email = $request->input('email');
        $entreprise->password = Hash::make($request->input('password'));
        $entreprise->adresse = $request->input('adresse'); // Add new fields
        $entreprise->domaine = $request->input('domaine');
        $entreprise->description = $request->input('description');
        // Add other fields as needed

        // Save the enterprise to the database
        $entreprise->save();

        // You may want to log the enterprise in automatically or
        // redirect to a login page, depending on your application flow.

        return redirect()->route('login')->with('is_entreprise_registration', true);
    }
}
