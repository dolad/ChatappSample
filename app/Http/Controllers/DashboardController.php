<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class DashboardController extends Controller
{
    //
    public function display(){

        return view('index');
    }

    public function displaylogin()
    {

       return view('logon');
    }
    public function displaycheckout()
    {
        return view('checkout');
    }
    
    public function charge(Request $request){
        \Stripe\Stripe::setApiKey('sk_test_uytYGxPnz9qdKl44K9fJP7hB00xqnValz9');
        $token = $request->input('stripeToken');
    
            $charge = \Stripe\Charge::create([
                'amount' => 999,
                'currency' => 'usd',
                'description' => 'test charge',
                // 'source' => 'tok_visa',
                'source'=>$token
            ]);
            session(['key'=>$charge->id]);
        return redirect()->route('premium');
}

public function premiumuser()
    {
        return view ('premium');
    }



public function update(Request $request)
{
    $this->validate($request,[
        'contact'=>'required',
    ]);

    if ($request->hasFile('image')) {

        $featured=$request->image;
        $featured_new_name=time().$featured->getClientOriginalName();
        $featured->move('uploads/post',$featured_new_name);
    

    }

    $userid= auth()->id();
    $charge=session('key'); 
    $payment_id=$charge;
    $user=User::find($userid);
    $user->phone=$request->contact;
    $user->stripeid=$payment_id;
    $user->profile_image='uploads/post'.$featured_new_name;

    $user->save();

    $message="member updated to premium user";
    return redirect()->route('home')->with('success', $message);

        
       

}



}
