<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DogDailyController extends Controller
{
    private $table1 = 'dog';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  DB::select("SELECT DISTINCT(a.dog_id),b.name,b.pic,a.check_status from dog_sponsor_records as a left join dogs as b on a.dog_id=b.dog_id WHERE a.user_id=:id AND exists(SELECT * FROM dog_daily_records as c WHERE c.dog_id=a.dog_id)", ['id' => Session::get(("user_id"))]);
        if(empty($data)){
            echo ("<script>alert('抱歉，您助養的狗狗暫無日常紀錄');location='/member';</script>");
        }
        else{
            return view('front.dog_daily_record_list', ['data' => $data]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        DB::table('dog_sponsor_records')
            ->where('dog_id', $id)
            ->where('user_id', Session::get('user_id'))
            ->update(['check_status' => 1]);
        $data_daily =  DB::table('dog_daily_records')
            ->where('dog_daily_records.dog_id', $id)
            ->orderBy('dog_daily_records.record_time', 'desc')
            ->get();

        return view('front.dog_daily_record', ['data_daily' => $data_daily]);
    }
}
