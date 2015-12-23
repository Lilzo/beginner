<?php
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('band', 'BandController');

get('/signup', array('as'=>'signup',
    'uses' => 'Auth\AuthController@getRegister'));
post('/signup', array('as'=>'signup',
    'uses' => 'Auth\AuthController@getRegister'));

Route::get('/activity_logs/create', function(){
    return view('activity_log.create');
});

Route::get('/activity_logs', function(){
    //$user = \Vinyl\User::with('activity_logs')->first();

    //$activity_logs = Vinyl\ActivityLog::with('users')->get();
    $activity_logs= Vinyl\ActivityLog::all();
    return view('activity_log.index')->with('activity_logs', $activity_logs);
});

Route::post('/activity_logs/create', function(){
    //$activity_log = Vinyl\ActivityLog::create(Input::all());
    //$tl = \Vinyl\User::find(1);
    $user_id = \Illuminate\Support\Facades\Auth::user()->id;

    $applicant = Input::get('applicant');
    $area = Input::get('area');
    $problem = Input::get('problem');
    $activity = Input::get('activity');
    $description = Input::get('description');
    $is_solved = Input::get('is_solved');

    $activity_log = \Vinyl\ActivityLog::create(['user_id' =>$user_id ,
        'applicant' => $applicant,
        'area' => $area,
        'problem' => $problem,
        'activity'=> $activity,
        'description' => $description,
        'is_solved' => $is_solved] );
    //$activity_logs()->save($activity_log);
    return redirect('activity_logs')->withSuccess('New log has been added');
});



/*
Route::get('/', function(){
   return  Redirect::to('cats');
});

Route::get('/cats', function(){
    //return sprintf('All cats!');
    $cats = Vinyl\Cat::all();
    return view('cats.index')->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name){
   $breed = Vinyl\Breed::with('cats')
       ->whereName($name)
       ->first();
    return view('cats.index')
        ->with('breed', $breed)
        ->with('cats', $breed->cats);
});

Route::get('cats/{cat}', function(Vinyl\Cat $cat){
    return view('cats.show') ->with('cat', $cat);
});

Route::get('about', function(){
   return view('about')->with('number_of_cats', 9001);
});

Route::get('/cats/create', function(){
    return view('cats.create');
});

Route::post('cats', function() {
    $cat = Vinyl\Cat::create(Input::all());
    return redirect('cats/'.$cat->id)
        ->withSuccess('Cat has been created.');
});
Route::get('cats/{cat}/edit', function(Vinyl\Cat $cat) {
    return view('cats.edit')->with('cat', $cat);
});
Route::put('cats/{cat}', function(Vinyl\Cat $cat) {
    $cat->update(Input::all());
    return redirect('cats/'.$cat->id)
        ->withSuccess('Cat has been updated.');
});
Route::delete('cats/{cat}', function(Vinyl\Cat $cat) {
    $cat->delete();
    return redirect('cats')
        ->withSuccess('Cat has been deleted.');
});

/*
Route::get('user/{id}', ['middleware' => ['auth'], function($id) {
// Perform some operations
    return 'Something';
}]);

*/
//Route::get('user/{id}', ['uses' => 'UserController@show']);Route::get('user/{id}', ['uses' => 'UserController@show']);


/*Routes for Vinyl project
 * date: 17.11.2015
 *                       */

//Route::get('/albums', function)



//Route::get('/bands', 'BandController@allBands');

