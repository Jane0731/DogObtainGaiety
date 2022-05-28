<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use Illuminate\Support\Facades\DB;

class BKTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tests=DB::select('SELECT id,question,IF(answer=0,"錯誤","正確") as answer,annotation FROM tests');
        $tests=test::paginate(8);
        return view('back.bk_test',['BKtest'=>$tests]);
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
            'action'=>'/back/bk_test',
            'modal_header'=>"新增小測驗資料",
            'id'=>'',
            'question'=>'',
            'answer'=>'',
            'annotation'=>'',
        ];
        return view("modals.bk_addTest_modal",$view);
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

            $addtest=new test;
            $addtest->id=$request->input('id');            
            $addtest->question=$request->input('question');
            $addtest->answer=$request->input('answer');
            $addtest->annotation=$request->input('annotation');
            $addtest->save();
        
        
        return redirect('/back/bk_test');
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
        $edit=test::find($id);
        //dd($edit);
        $view=[
            'action'=>'/back/bk_test/'.$id,
            'method'=>'patch',
            'modal_header'=>"編輯小測驗資料",
            'id'=>$edit->id,
            'question'=>$edit->question,
            'answer'=>$edit->answer,
            'annotation'=>$edit->annotation,
        ];
        return view("modals.bk_editTest_modal",$view);
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
        $updateTest=test::find($id);
        
        if($updateTest->id!=$request->input('id')){
            $updateTest->id=$request->input('id');
        }
        if( $updateTest->question!=$request->input('question')){
            $updateTest->question=$request->input('question');
        }
        if($updateTest->annotation!=$request->input('annotation')){
            $updateTest->annotation=$request->input('annotation');
        }

  
        $updateTest->save();
        return redirect('/back/bk_test');

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
        return test::destroy($id);
    }
}
