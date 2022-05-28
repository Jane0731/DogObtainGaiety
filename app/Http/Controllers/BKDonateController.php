<?php

namespace App\Http\Controllers;

use App\Models\donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BKDonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donates=DB::select('SELECT * FROM donates');
        $donates=donate::paginate(8);
        return view('back.bk_donate',['BKdonate'=>$donates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $view=[
            'action'=>'/back/bk_donate',
            'modal_header'=>"新增捐款資料",
            'item_name'=>'',
            'item_pic'=>'',
            'des'=>'',
            'release_time'=>'',
            'deadline'=>'',
            'price'=>'',
            'target_amount'=>'',
        ];
        return view("modals.bk_addDonate_modal",$view);
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
        if($request->hasfile('item_pic') && $request->file('item_pic')->isValid()){
            $addDonate=new donate;
            $request->file('item_pic')->storeAs('item_pic',$request->file('item_pic')->getClientOriginalName());
            $addDonate->item_pic=$request->file('item_pic')->getClientOriginalName();
            $addDonate->item_name=$request->input('item_name');
            $addDonate->target_amount=$request->input('target_amount');
            $addDonate->deadline=$request->input('deadline');
            $addDonate->release_time=$request->input('release_time');
            $addDonate->des=$request->input('des');
            $addDonate->price=$request->input('price');
            $addDonate->save();
        }
        
        return redirect('/back/bk_donate');
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
        $edit=donate::find($id);
        //dd($edit);
        $view=[
            'action'=>'/back/bk_donate/'.$id,
            'method'=>'patch',
            'modal_header'=>"編輯捐款資料",
            'item_name'=>$edit->item_name,
            'des'=>$edit->des,
            'release_time'=>$edit->release_time,
            'deadline'=>$edit->deadline,
            'price'=>$edit->price,
            'target_amount'=>$edit->target_amount,
        ];
        return view("modals.bk_addDonate_modal",$view);
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
        $updateDonate=donate::find($id);

        if($request->hasfile('item_pic') && $request->file('item_pic')->isValid()){
            $request->file('item_pic')->storeAs('item_pic',$request->file('item_pic')->getClientOriginalName());
            $updateDonate->item_pic=$request->file('item_pic')->getClientOriginalName();
        }

        if($updateDonate->item_name!=$request->input('item_name')){
            $updateDonate->item_name=$request->input('item_name');
        }
        
        if($updateDonate->target_amount!=$request->input('target_amount')){
            $updateDonate->target_amount=$request->input('target_amount');
        }
        
        if($updateDonate->deadline!=$request->input('deadline')){
            $updateDonate->deadline=$request->input('deadline');
        }

        if($updateDonate->release_time!=$request->input('release_time')){
            $updateDonate->release_time=$request->input('release_time');
        }

        if($updateDonate->des!=$request->input('des')){
            $updateDonate->des=$request->input('des');
        }

        if($updateDonate->price!=$request->input('price')){
            $updateDonate->price=$request->input('price');
        }

        $updateDonate->save();
        return redirect('/back/bk_donate');
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
        return donate::destroy($id);
    }
}
