<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Models\User;
  
class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(5);
        return view('users', compact('users'));
    }
}
