<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
	{
		$friends = Auth::user()->friends();
		

		$friends_ids_array = [];
		$friends_ids_array[] = Auth::id();

		foreach ($friends as $friend) {
			$friends_ids_array[] = $friend->id;
		}

		/*if (is_admin()) {

			$posts = Post::
				with('comments.user')
				->with('comments.likes')
				->with('likes')
				->whereIn('user_id', $friends_ids_array)
				->orderBy('created_at', 'desc')
				->withTrashed()
				->paginate(10);

		} else {*/

			$posts = Post::
				with('comments.user')
				->with('comments.likes')
				->with('likes')
				->whereIn('user_id', $friends_ids_array)
				->orderBy('created_at', 'desc')
				->paginate(10);

		//}

		return view('home', compact('posts'));
	}

	public function showChangePasswordForm(){
        return view('auth.passwords.changepassword');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }
}
