<?php
namespace App\Http\Controllers\ShopAuth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
//    use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    public function getRegistration()
    {
        return view('shopAuth.registration');
    }

    public function postRegistration(Request $request)
    {
        // 1. Validate data

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        // 2. Check rePassword
        // 3. Check existed user
        // TODO add message
        $userExisted = User::where(['email' => $request->email])->first();

        $messages = ['message' => 'User with that email already exists!!!'];

        if ($userExisted) {
            return back()->withInput()->withErrors($messages);
        }
            // 4. Create new User
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            // 5. Redirect to login page
            return redirect('/login')->with('status', 'Profile updated!');
    }

    public function getLogin()
    {
        return view('shopAuth.login');
    }

    public function postLogin(Request $request)
    {
        // 1. Check existing email and password
        if (!$request->email || !$request->password)
        {
            return back()->withInput()->with('info', 'not enough information!');
        }
        // 2. Find user
        $user = User::where('email', '=', $request->email)->first();

        if (empty($user)) {
            return back()->withInput()->with('info', 'user is not found');
        }
        //3. check password
        if(Hash::check( $request->password, $user->password) === false) {
            return back()->withInput()->with('info', 'user is not found');
        }
        // 4. Add session
        session(['userId' => $user->id]);
        // 5. Create response
        return redirect('/')->with('status', 'You are authorised');
    }

//    public function postLogin(Request $request)
//    {
//        // 1. Check existing email and password
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|email',
//            'password' => 'required|min:6',
//        ]);
//
//        if ($validator->fails()) {
//            return back()->withInput()->withErrors($validator);
//        }
//
//        $user = $request->input('email');
//
//        if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
//            // check if user email exists in database
//            $user = User::where('email', '=', $request->email)->first();
//            session(['userId' => $user->id]);
//
//
//            if (is_numeric($request->get('email'))) {
//                return ['email' => $request->get('email'), 'password' => $request->get('password')];
//            }
//
//            $info = ['info' => 'User is not found'];
//            if (empty($user)) {
//                // TODO check password
//                return back()->withInput()->withErrors($info);
//            }

//
//        // 3. Add session
//
//
//        // 4. Create response
//        return redirect('/')->with('status', 'You are authorised');
//    }

    public function getLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('status', 'Login profile!');
    }
}