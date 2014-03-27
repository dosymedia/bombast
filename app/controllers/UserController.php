<?php

//use repositories\storage\user\UserRepository as User;
class UserController extends BaseController {

	protected $user;
	//protected $layout = 'layouts.master';

	// Construct user, extrapolate from database. 
	public function __construct(User $user) {
		$this->user = $user;
		$this->beforeFilter('csrf', array('on'=>'post'));
		//parent::__construct();
	}
	
//	View::share('user', 'users');

/* ==========================================================================
   Basic User Functions
   ========================================================================== */

	// User index
	public function index()
	{
		$users = $this->user->all();
		return View::make('user.index', ['users' => $users]);
	}


	// Show user @ user/{user}
	public function show($id)
	{
		$user = $this->user->find($id);
		return View::make('user.show', compact('user'));
	}
	
	// Create user
	public function create()
	{
		return View::make('user.create');
	}

	// Store user
	public function store()
	{
		$input = Input::all();

		if ( ! $this->user->fill($input)->isValid()) 
		{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$this->user->save();

		return Redirect::route('user.index');
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

	// Show user by user name
	public function showUserName()
	{
		return View::make('user.show');
	}

	// User Posts
	public function showUserPosts()
	{
		return View::make('user.posts');
	}




}