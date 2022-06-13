<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;




class PageController extends Controller
{
    public function mainpage(){
       
        return view("mainpage");
    }


    public function LoginController(){

        return view("login");
    }
    public function customLogin (Request $request)
    {
//         dd($request->all());

        //   $request -> validate([
        //       'username' => 'required',
        //       'password' =>'required'
        //   ]);

//          $credentials = ['email'=>$request->username,'password'=>$request->password];

        //   $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        //   $credentials = array($fieldType => $request->username, 'password' => $request->password);

       //   dd($credentials);

        $credentials = [
            'email' => $request->username,
            'password' => $request->password
        ];

//        if (Hash::check('123456', bcrypt('123456'))) {
//            return 'match!!';
//        }else{
//            return 'not match!!';
//        }
//        dd($credentials['email'],$credentials['password']);

//        dd(Auth::attempt(array('email'=>'teo2x@gmail.com','password'=>'123456')));
//        dd($request->all());
       $user = User::where('email', '=', $request->username)->first();
//       dd($user);
//       dd($request->password);
//        dd($user->password);
//        dd(Hash::check('123456','$2y$10$8RBjvLFfI7HxE91JDl9CMuFj1sx7iW/3Olo1RXjxrA4KLkWzbWwNC'));
//       if (Hash::check($request->password,$user->password )){
//        dd("Dang nhap thanh cong");
//       }
//
//        if (Auth::attempt(array('email'=>$credentials['email'],'password'=>$credentials['password']))) {
//        // Authentication was successful...
////        dd("Login success");
//
//        }
//    else{
//       dd("Login fail");
//    }



          if (Auth::attempt($credentials)) {
//            dd("login thanh cong ");
              $request->session()->regenerate();

              return redirect()->intended('mainpage')
                  ->withSuccess('Signed in');
          }


          return redirect("login")->withSuccess('Login details are not valid');
    }


//Đăng kí

    public function RegisterController(){
        return view ("register");
    }

    public function customRegistration(Request $request)
    {
        $validated = $request->validate([
            // username hay name
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
//        dd($validated);
        $user = $this->create($validated);

        // auth()->login($user); login neu can

        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
//        dd($data);

        return User::create([

            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],

        ]);
    }

/////////////////////////////////////////////////////////////////////////////



    public function mainpag()
    {
        if (Auth::check()) {
            return view('mainpage');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function cart(){
        return view("cart");
    }
    public function wishlist(){
        return view("wishlist");
    }
    public function shop(){
        return view("shop");
    }
}
