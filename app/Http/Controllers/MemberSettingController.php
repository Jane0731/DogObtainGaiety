<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class MemberSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('front.member_setting');
    }
    
}
