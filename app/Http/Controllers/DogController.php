<?php

namespace App\Http\Controllers;

use App\Models\dog;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DogController extends Controller
{
    private $table1 = 'dog';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs =DB::select('SELECT kind,IF(sex=0,"母","公") as sex,name,pic,dog_id FROM dogs');
        return view('front.dog_list', ['data' => $dogs]);
    }


    public function getAddToCart(Request $request, $id)
    {
        $qty = $request->input('quantity');
        $qty = intval($qty);
        $dog = dog::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($dog, $dog->dog_id, $qty);
        Session::put('cart', $cart);
        echo ("<script>alert('成功加入口袋名單');location='/dog'</script>");
    }

    public function getAddToCart_r(Request $request, $id)
    {
        $dog = dog::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add_r($dog, $dog->dog_id);
        Session::put('cart', $cart);
        return view('Cart.cart', [
            'carts' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  DB::select('SELECT kind,IF(sex=0,"母","公") as sex,IF(situation=0,"無人認養","有人認養") as situation,name,pic,dog_id,personality,story,birthday FROM dogs WHERE dog_id=' . $id);
        return view('front.dog', ['data' => $data]);
    }
}
