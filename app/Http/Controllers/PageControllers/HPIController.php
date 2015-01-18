<?php namespace App\Http\Controllers\PageControllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HPIController extends Controller {

    public function getHPI()
    {
        return view('chart/hpi');
    }

}
