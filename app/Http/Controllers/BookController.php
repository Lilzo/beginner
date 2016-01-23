<?php

namespace Vinyl\Http\Controllers;

use Illuminate\Http\Request;

use Vinyl\Http\Requests;
use Vinyl\Http\Controllers\Controller;

class BookController extends Controller
{
    public function getBooks()
    {
        return 'Books!';
    }
}
