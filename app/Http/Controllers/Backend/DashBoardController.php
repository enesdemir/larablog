<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{

    public function __invoke()
    {
        return  view('backend.index');
        // TODO: Implement __invoke() method.
    }
    //
}
