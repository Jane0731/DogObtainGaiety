<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dog;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class BKDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dogs=DB::select('SELECT *FROM dogs');
        $dogs=dog::paginate(5);
        return view('back.bk_dog',['BKdog'=>$dogs]);
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
            'action'=>'/back/bk_dog',
            'modal_header'=>"新增流浪狗資料",
            'name'=>'',
            'birthday'=>'',
            'personality'=>'',
            'story'=>'',
        ];
        return view("modals.bk_addDog_modal",$view);
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

        if($request->hasfile('headshot') && $request->file('headshot')->isValid()){
            $adddog=new dog;
            $request->file('headshot')->storeAs('headshot',$request->file('headshot')->getClientOriginalName());
            $adddog->pic=$request->file('headshot')->getClientOriginalName();
            $adddog->name=$request->input('name');
            $adddog->kind=$request->input('kind');
            $adddog->birthday=$request->input('birthday');
            $adddog->sex=$request->input('sex');
            $adddog->situation=0;
            $adddog->personality=$request->input('personality');
            $adddog->story=$request->input('story');
            $adddog->save();
        }
        
        return redirect('/back/bk_dog');
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
        $edit=dog::find($id);
        //dd($edit);
        $view=[
            'action'=>'/back/bk_dog/'.$id,
            'method'=>'patch',
            'modal_header'=>"編輯流浪狗資料",
            'name'=>$edit->name,
            'birthday'=>$edit->birthday,
            'personality'=>$edit->personality,
            'story'=>$edit->story,
        ];
        return view("modals.bk_editDog_modal",$view);
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
        $updateDog=dog::find($id);
        
        if($request->hasfile('headshot') && $request->file('headshot')->isValid()){
            $request->file('headshot')->storeAs('headshot',$request->file('headshot')->getClientOriginalName());
            $updateDog->pic=$request->file('headshot')->getClientOriginalName();
        }
        if($updateDog->name!=$request->input('name')){
            $updateDog->name=$request->input('name');
        }
        if( $updateDog->kind!=$request->input('kind')){
            $updateDog->kind=$request->input('kind');
        }
        if($updateDog->birthday!=$request->input('birthday')){
            $updateDog->birthday=$request->input('birthday');
        }
        if($updateDog->sex!=$request->input('sex')){
            $updateDog->sex=$request->input('sex');
        }
        if($updateDog->situation!=$request->input('situation')){
            $updateDog->situation=$request->input('situation');
        }
        if($updateDog->personality!=$request->input('personality')){
            $updateDog->personality=$request->input('personality');
        }
        if($updateDog->story!=$request->input('story')){
            $updateDog->story=$request->input('story');
        }
  
        $updateDog->save();
        return redirect('/back/bk_dog');

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
        return dog::destroy($id);
    }
}
