<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
 
class UserController extends Controller
{
     
    public function index()
    {
        return view('users');
         
    }
    public function list()
    {
        return response()->json([
            'users' => \App\Models\User::latest()->get()
        ]);
         
    }
}