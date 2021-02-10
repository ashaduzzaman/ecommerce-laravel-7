<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $userDetails = Auth::user();
        $orders = Order::where('user_id', $userDetails->id)->get();
        // dd($orders);
        return view('account.index', get_defined_vars());
    }

    public function update(Request $request)
    {
        if(Auth::user()){
            $user = User::find(Auth::id());
            if($user){
                $user->name = $request->name;
                $user->save();

                return redirect()->back()->with('success','Your account information has been updated successfully');
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if(!(Hash::check($request->current_password, Auth::user()->password))){
            return redirect()->back()->with('error', 'The old password does not match');
        }
        if(strcmp($request->current_password,$request->password) == 0){
            return redirect()->back()->with('error','New password can not be same with old password');
        }
        if(Auth::user()){
            $user = User::find(Auth::id());

            $user->password =  Hash::make($request->password);
            $user->save();

            return redirect()->back()->with('success','Password changed successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }

    }
}
