<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;



class DonateItemRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $donate =  DB::select('SELECT a.created_at,b.item_name,a.total,b.price FROM donate_item_records as a LEFT JOIN donates as b ON a.donate_id=b.donate_id WHERE a.user_id='.session()->get('user_id'));

        $sponsor =  DB::select('SELECT a.updated_at,b.item_name,a.total FROM send_item_records as a LEFT JOIN donates as b ON a.donate_id=b.donate_id WHERE a.status=1 and a.user_id='.session()->get('user_id'));
        
        return view('front.donate_record',['donate'=>$donate,'sponsor'=>$sponsor]);
    }

}
