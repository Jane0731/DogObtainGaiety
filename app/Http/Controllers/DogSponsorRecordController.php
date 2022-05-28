<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\donate;


class DogSponsorRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data =  DB::select('SELECT dog_sponsor_records.dog_id,dog_sponsor_records.times,dog_sponsor_records.created_at,(SELECT dogs.name from dogs where dogs.dog_id=dog_sponsor_records.dog_id) as name FROM dog_sponsor_records where user_id='.session()->get('user_id'));
        return view('front.sponsor_record',['data'=>$data]);
    }

}
