<?php

namespace App\Http\Controllers;

use App\Models\dog;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class CartController extends Controller
{
    public function cart()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $oldDonateCart = Session::has('cart_donate') ? Session::get('cart_donate') : null;
        $DonateCart = new Cart($oldDonateCart);
        if ($DonateCart->items == null && $cart->items == null) {
            return view('Cart.cart');
        } 
        elseif ($DonateCart->items != null && $cart->items == null) {
            return view('Cart.cart', [
                'totalPrice' => $cart->totalPrice + $DonateCart->totalPrice,
                'totalQty' => $cart->totalQty + $DonateCart->totalQty,
                'carts_donate' => $DonateCart->items
            ]);
        } 
        elseif ($DonateCart->items == null && $cart->items != null) {
            return view('Cart.cart', [
                'totalPrice' => $cart->totalPrice + $DonateCart->totalPrice,
                'totalQty' => $cart->totalQty + $DonateCart->totalQty,
                'carts' => $cart->items,
            ]);
        } 
        else {
            return view('Cart.cart', [
                'carts' => $cart->items,
                'totalPrice' => $cart->totalPrice + $DonateCart->totalPrice,
                'totalQty' => $cart->totalQty + $DonateCart->totalQty,
                'carts_donate' => $DonateCart->items
            ]);
        }
    }

    public function clearCart()
    {
        if (session()->has('cart')) {
            session()->forget('cart');
        }
        if (session()->has('cart_donate')) {
            session()->forget('cart_donate');
        }
        return redirect()->action('App\Http\Controllers\DogController@index');
    }

    //狗狗
    public function increaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->increaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }

    public function decreaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->decreaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }

    public function removeItem($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->removeItem($id);
        session()->put('cart', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }

    //物資
    public function increaseByOne_donate($id)
    {
        $cart = new Cart(Session::get('cart_donate'));
        $cart->increaseByOne($id);
        session()->put('cart_donate', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }

    public function decreaseByOne_donate($id)
    {
        $cart = new Cart(Session::get('cart_donate'));
        $cart->decreaseByOne($id);
        session()->put('cart_donate', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }

    public function removeItem_donate($id)
    {
        $cart = new Cart(Session::get('cart_donate'));
        $cart->removeItem($id);
        session()->put('cart_donate', $cart);
        return redirect()->action('App\Http\Controllers\CartController@cart');
    }
}
