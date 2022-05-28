<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function start()
    {
        $questions = DB::select('SELECT * from tests');
        shuffle($questions);
        return view('front.test', ['questions' => json_encode($questions)]);
    }
}
