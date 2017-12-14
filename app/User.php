<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public static function updateData($request){
		$status = false;
		try{
			$user;
			if(isset($request->id)){
				$user = User::find($request->id);
			}else{
				$user = new User;	
			}
			$user->name = $request->name;
			$user->email = $request->email;
			$user->save();
			$status = true;
		}catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
		return $status;
	}
}
