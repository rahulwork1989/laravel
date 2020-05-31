<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use Illuminate\Support\Facades\DB;



use App\User; 

class UserController extends Controller
{
    public function index(){
        //return ('Welcome User');

        $data = [
            'name' => 'Harry',
            'email' => 'harry@test.com',
            //'password' =>bcrypt('password')
            'password' => 'harry'
        ];
       // User::create($data);

        // $user = new User();
        // $user->name = 'Rahul';
        // $user->email = 'rahul@test.com';
        // $user->password = 'rahul1234';
        // $user->save();

         $user = User::all();
         return $user;

        //User::where('id',1)->delete();

        return view('home');
    }

    public function uploadAvatar(Request $request){
       
       if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            //$request->session()->flash('message', 'Image Uploaded');
            return redirect()->back()->with('message', 'Image Uploaded');
        }
       // $request->session()->flash('errormessage', 'Image Not Uploaded');
        return redirect()->back()->with('errormessage', 'Image Not Uploaded');
    }
}
