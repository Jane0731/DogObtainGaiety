<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FinancialStatementsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (!empty(request('status'))) {
            switch (request('status')) {
                case '1':
                    
                    $month = intval(request('month'))-1;
                    $year = intval(request('year'));
                    if($month<1){
                        $year = intval(request('year'))-1;
                        $month=12;
                    }
                    break;
                case '2':
                    $month = intval(request('month'))+1;
                    $year = intval(request('year'));
                    if($month>12){
                        $year = intval(request('year'))+1;
                        $month=1;
                    }
                    break;
                default:
                    break;
            }
        } else {
            $year = date('Y');
            $month = date('m');
        }
        $search_date = $year . "-" . $month;
        $send_item = DB::select("select a.total,date(a.created_at) as created_at,(select b.name from users as b where b.user_id=a.user_id)as name,(select c.item_name from donates as c where c.donate_id=a.donate_id)as item_name from send_item_records as a where date_format(a.created_at, '%Y-%m') =:date and a.status=1", ['date' => $search_date]);
        $donate_item = DB::select("select a.total,date(a.created_at) as created_at,(select b.name from users as b where b.user_id=a.user_id)as name,(select c.item_name from donates as c where c.donate_id=a.donate_id)as item_name,(select d.price from donates as d where d.donate_id=a.donate_id)as item_price from donate_item_records as a where date_format(a.created_at, '%Y-%m') =:date", ['date' => $search_date]);
        $dog = DB::select("select a.times,date(a.created_at) as created_at,(select b.name from users as b where b.user_id=a.user_id)as name from dog_sponsor_records as a where date_format(a.created_at, '%Y-%m') =:date", ['date' => $search_date]);
        return view('front.financial_statements', ['send_item' => $send_item, 'donate_item' => $donate_item, 'dog' => $dog, 'year' => $year, 'month' => $month]);
    }
}
