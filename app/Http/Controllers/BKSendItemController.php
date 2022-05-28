<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\send_item_record;
use Illuminate\Support\Facades\DB;

class BKSendItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sendItem=DB::select('SELECT send_item_records.donate_id,send_item_records.user_id,(SELECT users.name FROM users WHERE users.user_id=send_item_records.user_id) as username,send_item_records.total,send_item_records.status FROM send_item_records');
        $sendItem=send_item_record::paginate(8);
        return view('back.bk_sendItem',['BKsendItem'=>$sendItem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $updateStatus=send_item_record::find($id);

        $updateStatus->status=1;
        $updateStatus->save();
        return redirect('/back/bk_sendItem');

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
        return send_item_record::destroy($id);
    }
}
