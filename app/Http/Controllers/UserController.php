<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $listuser = User::all();
        return view('User.index', ['users' => $listuser]);
    }
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }
}
