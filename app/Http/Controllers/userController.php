<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class userController extends Controller
{
    public function addUser(Request $request)           //user toevoegen functie 
    {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
    ]);
    $name = htmlspecialchars($request->input('name'));
    $email = htmlspecialchars($request->input('email'));
    $password = htmlspecialchars($request->input('password'));
    $password = htmlspecialchars(bcrypt($password));
    $isAdmin = htmlspecialchars($request-> input('isAdmin'));
    $currentTime = date('Y-m-d H:i:s');
    $data = array('name'=>$name, "email"=>$email,"password"=>$password, "is_admin"=>$isAdmin,"created_at"=>$currentTime);
    \DB::table('Users')->insert($data);
    return redirect('addUser');
    }

    public function showSaldo()                     // saldo laten zien functie
    {
        $data = \DB::table('users')->where('id', Auth::id())->first();
        return view('content.saldo', ['saldo' => $data->saldo]);
    }

    public function addSaldo(Request $request)     // saldo toevoegen functie
    {
        $request->validate([
            'saldo' => ['required', 'numeric']
        ]);
        $saldo = htmlspecialchars($request->input('saldo'));
        $data = \DB::table('users')->where('id', Auth::id())->first();
        $newSaldo = $data->saldo + $saldo;
        \DB::table('Users')->where('id', Auth::id())->update(['saldo' => $newSaldo]);
        //return view('content.saldo', ['saldo' => $newSaldo]);
        return redirect('saldo');
    }

    public function showUser(Request $request)      // users laten zien functie
    {
        $data= User::all();
        return view('admin.userOverview', ['users'=>$data]);
    }
}
