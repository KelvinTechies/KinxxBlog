<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Auth;
// use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Session\Session;
// use Illuminate\Support\Facades\Session;
use Illuminate\Auth\SessionGuard;
use App\Models\PostModel;
// use GuzzleHttp\Psr7\Request;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\DB;


// 33ZS3MZ

class AdminController extends Controller
{
    public function register()
    {
        return view('Dashboard.register');
    }

    public function ValidateRegistrationPage(Request $request)
    {
        // dd($request);
        $form=$request->validate([
            'name'=>'required|string',
            'UserName'=>'required|string',
            'email'=>'required| string |email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            // 'password'=>'required|min:6|confirmed',
            // 'confirmpassword'=>'required|min:6| same:password',
            'password' => 'required|confirmed',
            // 'radio'=>'|in:Male,Female',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $filename;
       if ($request->hasFIle('img')) {
           $filename= $form['Image']=$request->file('img')->store('Imgs', 'public');
           
        }

        AdminModel::create([
            'Full_name'=>$request->input('name'),
            'UserName'=>$request->input('UserName'),
            'Email'=>$request->input('email'),
            'Password'=>Hash::make($request['password']),
            'Phone'=>$request->input('phone'),
            // 'Gender'=>$request->input('radio'),
            'Image'=>$filename
        ]);
        return view('Dashboard.login');
    }

    public function login()
    {
        return view('Dashboard.login');
        
    }

    public function LogIneRegistrationPage(Request $request)
    {
        // dd($request);

        $credentials=   $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        

        $user = AdminModel::where('email', '=', $request->email)->first();

        if (!$user) {
           return back()->with('fail', 'Your E-mail is not recognized');
        }else {
            if (Hash::check($request->password, $user->Password)) {
             $request->session()->put('LoggedUser', $user->id);
            return redirect('/dashboard');
                   
            } else {
           return back()->with('fail', 'Incorrect Password');
          
            }
            
        }
        
    }

    public function dashboard()
    {

        $data = ['loggedUserInfo'=>AdminModel::where('id', '=', session('LoggedUser'))->first()];
        

    // $pro=PostModel::count();
        return view('dashboard.dashboard', $data);
    }

        public function LogOut()
        {
            if (Session::has('LoggedUser')) {
                session()->pull('LoggedUser');
                return redirect('/login');
            }
        }
    public function Edit( $id)
    {
        // dd($id);
        // return $id;
        $loggedUserInfo=AdminModel::find($id);
       return view('dashboard.edit')->with([
           'loggedUserInfo'=>$loggedUserInfo
       ]);
    }

    public function Update(Request $request, $id)
    {
        //  dd($id);
    // dd($request);
        
         $form=$request->validate([
            'fullName'=>'required|string',
            'firstName'=>'required|string',
            'email'=>'required|string|email',
            'fone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048'
            
        ]);
    // dd($form);
        
        $filename;
       if ($request->hasFIle('img')) {
           $filename= $form['Image']=$request->file('img')->store('Imgs', 'public');
           
        }

    

        $fo=AdminModel::where('id',$id)->update([
            'Full_name'=>$request->input('fullName'),
            'UserName'=>$request->input('firstName'),
            'Email'=>$request->input('email'),
            'Phone'=>$request->input('fone'),
            'Image'=>$filename
            
        ]);
        return back()->with('success', 'updated');
    }

    // 32M5ZYY
    // 32M67HN
    // 32M6JVP
    // 32M6MVD
    // 32M72BD

    // public function AddContent()
    // {
    //    return view('dashboard.addContent');
    // }
}
