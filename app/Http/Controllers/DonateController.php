<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\donate;
use App\Models\send_item_record;
use App\Cart;
use Illuminate\Support\Facades\Session;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  DB::select('SELECT a.donate_id,a.item_name,a.target_amount,a.item_pic,a.des,a.price,(SELECT COALESCE(sum(b.total),0)) as total from donates as a LEFT JOIN donate_item_records as b ON b.donate_id=a.donate_id GROUP BY(a.donate_id)');
        return view('front.donate_list', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  DB::select('SELECT a.donate_id,a.item_name,a.target_amount,a.item_pic,a.des,a.price,(SELECT COALESCE(sum(b.total),0)) as total from donates as a LEFT JOIN donate_item_records as b ON  b.donate_id=a.donate_id WHERE a.donate_id = '.$id.' GROUP BY(a.donate_id)');

       
        return view('front.donate', ['data' => $data]);
    }
    public function send_supplies(Request $request, $id)
    {
        send_item_record::create([
            'user_id' => session()->get('user_id'),
            'donate_id' => $id,
            'total' => $request->input('send_quantity'),
        ]);
        echo ("<script>alert('已記錄捐贈意願');location='/donate'</script>");
    }

    public function getAddToCart(Request $request, $id)
    {
        $qty = $request->input('donate_quantity');
        $qty = intval($qty);
        $donate = donate::find($id);
        $oldCart = Session::has('cart_donate') ? Session::get('cart_donate') : null;
        $cart = new Cart($oldCart);
        $cart->add($donate, $donate->donate_id, $qty);
        Session::put('cart_donate', $cart);
        echo ("<script>alert('成功加入口袋名單');location='/donate'</script>");
    }
}
