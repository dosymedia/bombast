<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	protected $guarded = array('id', 'password'); // Don't mass assign these! 

	// Factory settings
	// Remove password confirmation
	public $autoPurgeRedundantAttributes = true;


/*	
	Route::get('users', function () {
		$user = User::find(1);
		return $user->user_name;
	})
*/



/* ==========================================================================
   Ardent Validation  
   ========================================================================== */


/* ==========================================================================
   Relationships 
   ========================================================================== */

   // Post
   // Group
   // Topic
   // Board
   // Category
   // Tag

}