<?php

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

Route::get('/bands', function(){
    $bands = Vinyl\Band::all();
    return view('bands.index')->with('bands', $bands);
});



Route::get('/bands/{name}', function($name){
    $band = Vinyl\Band::with('albums')->whereName($name)->first();

    return view('bands.band')->with('band', $band)->with('albums', $band->albums);
});
