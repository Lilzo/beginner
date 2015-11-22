<?php

namespace Vinyl\Http\Controllers;

use Illuminate\Http\Request;

use Vinyl\Http\Requests;
use Vinyl\Http\Controllers\Controller;
use Input;
use Vinyl\Band as Band;
use Vinyl\Http\Requests\SaveBandRequest;

class BandController extends Controller
{

    public function index()
    {
        $bands = Band::all();
        return  view('bands.index')->with('bands', $bands);
    }

    public function create()
    {
        return view('bands.create');
    }

    public function store(SaveBandRequest $request)
    {
        $band = Band::create(Input::all());
        return redirect('/band')->withSuccess('Band ' .$band->name .' has been added.');
    }

    public function show($id)
    {
        $band = Band::with('albums')->whereName($id)->first();
        return  view('bands.band')->with('bands', $band)->with('albums', $band->albums);
    }

    public function edit($id)
    {
        $band = Band::with('albums')->whereName($id)->first();
        return  view('bands.edit')->with('bands', $band);
    }

    public function update(SaveBandRequest $request, $id)
    {
        //$band = Band::with('albums')->whereName($id)->first();
        $band = Band::whereName($id)->update(Input::all());
        return dd($band);
        return redirect('/band/'.$band-name )->withSuccess('Band ' .$band->name .' has been edited.');
    }

    public function destroy($id)
    {
        $band = Band::with('albums')->whereName($id)->first();
        $band->delete();
        return redirect('band')
            ->withSuccess('Band has been deleted.');
    }
}
