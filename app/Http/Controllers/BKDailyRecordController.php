<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dog_daily_record;
use Illuminate\Support\Facades\DB;

class BKDailyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dailyrecords=DB::select('SELECT * FROM dog_daily_records');
        $dailyrecords=dog_daily_record::paginate(5);
        return view('back.bk_dailyRecord',['BKdailyrecord'=>$dailyrecords]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dog=DB::select('SELECT dog_id,name FROM dogs');
        //dd($dog);
        $view=[
            'action'=>'/back/bk_dailyRecord',
            'modal_header'=>"新增日常紀錄資料",
            'dog_id'=>$dog,
            'des'=>'',
            'record_time'=>'',
        ];
        return view("modals.bk_addDailyRecord_modal",$view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if($request->hasfile('record_pic') && $request->file('record_pic')->isValid()){
            $adddailyRecord=new dog_daily_record;
            $request->file('record_pic')->storeAs('record_pic',$request->file('record_pic')->getClientOriginalName());
            $adddailyRecord->record_pic=$request->file('record_pic')->getClientOriginalName();
            $adddailyRecord->dog_id=$request->input('dog_id');
            $adddailyRecord->des=$request->input('des');
            $adddailyRecord->record_time=$request->input('record_time');
            $adddailyRecord->save();
        }
        DB::table('dog_sponsor_records')
            ->where('dog_id', $request->input('dog_id'))
            ->update(['check_status' => 0]);
        return redirect('/back/bk_dailyRecord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit=dog_daily_record::find($id);
        //dd($edit);
        $view=[
            'action'=>'/back/bk_dailyRecord/'.$id,
            'method'=>'patch',
            'modal_header'=>"編輯日常紀錄資料",
            'dog_id'=>$edit->dog_id,
            'des'=>$edit->des,
            'record_time'=>$edit->record_time,
        ];
        return view("modals.bk_editDaily_modal",$view);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updateDailyRecord=dog_daily_record::find($id);
        
        if($request->hasfile('record_pic') && $request->file('record_pic')->isValid()){
            $request->file('record_pic')->storeAs('record_pic',$request->file('record_pic')->getClientOriginalName());
            $updateDailyRecord->pic=$request->file('record_pic')->getClientOriginalName();
        }
        if($updateDailyRecord->des!=$request->input('des')){
            $updateDailyRecord->des=$request->input('des');
        }

        $updateDailyRecord->save();
        return redirect('/back/bk_dailyRecord');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return dog_daily_record::destroy($id);
    }
}
