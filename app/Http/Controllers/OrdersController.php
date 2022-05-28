<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\dog_sponsor_record;
use App\Models\donate_item_record;

use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Services\UrlService;
use Ecpay\Sdk\Exceptions\RtnException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;


require __DIR__ . '/../../../vendor/autoload.php';

class OrdersController extends Controller
{
    public function index()
    {
        $orders = order::all();
        $orders = order::paginate(12);
        return view('back.bk_order', compact('orders'));
    }

    public function new(Request $res)
    {
        $qty = 0;
        $price = 0;
        //狗
        $checkdog = $res->input('cart');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if (empty($checkdog)) {
            $checkdog_array = "";
        } else {
            $checkdog_array = [];
            foreach ($checkdog as $checkdog_value) {
                $checkdog_array = Arr::add($checkdog_array, $checkdog_value, $oldCart->items[$checkdog_value]);
                $qty += $checkdog_array[$checkdog_value]['qty'];
                $price += $checkdog_array[$checkdog_value]['qty'] * 200;
            }
        }

        //物資
        $checkitem = $res->input('cart_donate');
        $oldDonateCart = Session::has('cart_donate') ? Session::get('cart_donate') : null;
        if (empty($checkitem)) {
            $checkitem_array = "";
        } else {
            $checkitem_array = [];
            foreach ($checkitem as $checkitem_value) {
                $checkitem_array = Arr::add($checkitem_array, $checkitem_value, $oldDonateCart->items[$checkitem_value]);
                $qty += $checkitem_array[$checkitem_value]['qty'];
                $price += $checkitem_array[$checkitem_value]['qty'] * $checkitem_array[$checkitem_value]['price'];
            }
        }
        if(empty($checkdog)&&empty($checkitem)){
            echo ("<script>alert('購物車請先新增資料');history.go(-1);</script>");
        }
        Session::put("checkdog_array", $checkdog_array);
        Session::put("checkitem_array", $checkitem_array);
        Session::put("order_price", $price);


        if (empty($checkdog_array) && !empty($checkitem_array)) {
            return view('Cart.order', ['checkitem_array' => $checkitem_array, 'qty' => $qty, 'price' => $price]);
        } else if (!empty($checkdog_array) && empty($checkitem_array)) {
            return view('Cart.order', ['checkdog_array' => $checkdog_array, 'qty' => $qty, 'price' => $price]);
        } else {
            return view('Cart.order', ['checkdog_array' => $checkdog_array, 'checkitem_array' => $checkitem_array, 'qty' => $qty, 'price' => $price]);
        }
    }

    public function store(Request $request)
    {
        $checkitem_array = Session::get('checkitem_array');
        $checkdog_array = Session::get('checkdog_array');
        $price = Session::get('order_price');
        $uuid_temp = str_replace("-", "", substr(Str::uuid()->toString(), 0, 18));
        order::create([
            'name' => $request->input('name'),
            'email' => $request->input('mail'),
            'cart' => serialize($checkitem_array),
            'cart_donate' => serialize($checkdog_array),
            'total'=>$price,
            'uuid' => $uuid_temp
        ]);
        try {

            $factory = new Factory([
                'hashKey' => '5294y06JbISpM5x9',
                'hashIv' => 'v77hoKGq4kWxNNIS',
            ]);
            $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');
            $MerchantTradeNo = $uuid_temp;

            $input = [
                'MerchantID' => '2000132',
                'MerchantTradeNo' => $MerchantTradeNo,
                'MerchantTradeDate' => date('Y/m/d H:i:s'),
                'PaymentType' => 'aio',
                'TotalAmount' => $price,
                'TradeDesc' => UrlService::ecpayUrlEncode('交易描述範例'),
                'ItemName' => "浪花之家愛心捐款",
                'ClientBackURL' => 'https://doghouse.nutc.edu.tw/success',
                'ReturnURL' => 'https://doghouse.nutc.edu.tw/callback',
                'ChoosePayment' => 'Credit',
                'EncryptType' => 1,
            ];
            $action = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';

            echo $autoSubmitFormService->generate($input, $action);
        } catch (RtnException $e) {
            echo '(' . $e->getCode() . ')' . $e->getMessage() . PHP_EOL;
        }
    }
    public function callback()
    {
        $order = order::where('uuid', '=', request('MerchantTradeNo'))->firstOrFail();
        $order->paid = !$order->paid;
        $order->save();
    }
    public function redirectFromECpay()
    {
        

        $checkdog_array = Session::get('checkdog_array');
        // dd($checkdog_array);
        if (!empty($checkdog_array)) {
            foreach ($checkdog_array as $key => $value) {
                dog_sponsor_record::create([
                    'user_id' => session()->get('user_id'),
                    'dog_id' => $key,
                    'times' => $value['qty'],
                ]);
                $Cart_dog = new Cart(Session::get('cart'));
                $Cart_dog->removeItem($key);
                Session::put('cart', $Cart_dog);
            }
        }
        $checkitem_array = Session::get('checkitem_array');
        if (!empty($checkitem_array)) {
            foreach ($checkitem_array as $key => $value) {

                donate_item_record::create([
                    'user_id' => session()->get('user_id'),
                    'donate_id' => $key,
                    'total' => $value['qty'],
                ]);
                $Cart_donate = new Cart(Session::get('cart_donate'));
                $Cart_donate->removeItem($key);
                Session::put('cart_donate', $Cart_donate);
            }
        }
        session()->forget('checkdog_array');
        session()->forget('checkitem_array');
        return redirect('/member');
    }
}
