<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ImagesController extends Controller
{
	public function user_avatar($id, $size)
	{
		$user = User::findOrFail($id);

		/*if (is_null($user->avatar)) {
			if ($user->sex == 'm')
			$img = Image::make('')->fit($size)->response('jpg', 90);
			else
			$img = Image::make('')->fit($size)->response('jpg', 90);	
		} elseif (strpos($user->avatar, 'http') !== false) {
			$img = Image::make($user->avatar)->fit($size)->response('jpg', 90);
		} else {
			$avatar_path = asset('storage/users/' . $id . '/avatars/' . $user->avatar);
			$img = Image::make($avatar_path)->fit($size)->response('jpg', 90);
		}

		return $img;*/
	}
}
