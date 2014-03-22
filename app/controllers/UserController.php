<?php

//use repositories\storage\user\UserRepository as User;
class UserController extends BaseController {

	//protected $user;
	//protected $layout = 'layouts.master';

	// Inject user repository.
	/*public function __construct(User $user) {
		$this->user = $user;
		//$this->beforeFilter('csrf', array('on'=>'post'));
		//parent::__construct();
	}
	*/


/* ==========================================================================
   Basic User Functions
   ========================================================================== */

	// User index
	public function index()
	{
		return User::all();
	}


	// Show user @ user/{user}
	public function show($id)
	{
		//return $this->user->find($id);
		return View::make('user.show');
	}
	
	// Create user
	public function create()
	{
		return View::make('user.create');
	}

	// Store user
	public function store()
	{
		//return View::make('user.edit');
	}


	// Edit user
	public function edit($id)
	{
		return View::make('user.edit');
	}

	// Update user
	public function update($id)
	{
		// Update
	}

	// Delete user
	public function destroy($id)
	{
		//return $this->user->delete($id);
	}


/* ==========================================================================
   Special Banana 
   ========================================================================== */

	// User dashboard
	public function showDashboard()
	{
		return View::make('user/dashboard');
	}

	// User Posts
	public function showUserPosts()
	{
		return View::make('user.posts');
	}


}