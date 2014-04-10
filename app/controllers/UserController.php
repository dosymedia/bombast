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

		$this->user->password = Hash::make(Input::get('password'));
		$this->user->save();

		return Redirect::route('user.index');
	}


	// Edit user
	public function edit($id)
	{
		$user = $this->user->find($id);

		return View::make('user.edit', compact('user') );
	}

	// Update user
	public function update($id)
	{
		$user = $this->user->findOrFail($id);
		$original_password = $user->password;
		$user->fill(Input::all());
		$password = Input::get('password');

		// If the password is left empty, use the old one
		if (empty($password)) {
			$password = $original_password;
			$user->password = Hash::make($password);
		}

		else {
			$user->password = Hash::make($password);
		}
		// If there's an avatar, upload it
		if (Input::hasFile('avatar')) {
			$avatar = Input::file('avatar');
			$avatar_url = '/img/' . $id . '/';
			$destinationPath = public_path() . $avatar_url;
			$extension = $avatar->getClientOriginalExtension();
			$fileName = 'avatar.' . $extension;
			$user->avatar_url = $avatar_url . $fileName; // Save URL in DB
			$upload_success = $avatar->move($destinationPath, $fileName);
		}

		$user->save();
		//return View::make('user.show', compact('user'));
		return View::make('user.edit', compact('user') );
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
		return View::make('user.dashboard');
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

	// Create Character
	public function createCharacter()
	{
		$this->user->id = 1;
		$user = $this->user;
		return View::make('user.create-character', compact('user'));
	}


}