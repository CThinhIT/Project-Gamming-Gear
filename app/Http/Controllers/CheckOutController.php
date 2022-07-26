<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\OrderItem;
use App\Models\Order;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


//ngu vl
// session_start();
class CheckOutController extends Controller
{
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function momo_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $subTotal = Session::get('subTotal') * 23000;

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $subTotal;
        $orderId = time() . "";
        $redirectUrl = "http://localhost/project2/public/checkout";
        $ipnUrl = "http://localhost/project2/public/checkout";
        $extraData = "";


        $requestId = time() . "";
        $requestType = "payWithATM";
        // $extraData = "";
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        $data = $request->all();
        $this->validate($request, [
            'name_user'     =>  'required',
            'email_user'  =>  'required|email',
            'phone_user' => 'required',
            'address' => 'required',
            'phone_user' => 'required'
        ]);
        $email = $data['email_user'] ?? '';
        $name = $data['name_user'] ?? '';
        $phone = $data['phone_user'] ?? '';
        $address = $data['address'] ?? '';

        $order = Order::create($data);
        Mail::to($email)->send(new SendMail($data));


        //Just a example, please check more in there
        return redirect()->to($jsonResult['payUrl'])->with(Session::forget('cart'));
    }

    public function index()
    {
        $province = Province::orderby('id', 'ASC')->get();
        // $province_id=Province::all()->get('id');

        // $district = District::where('_province_id', $province_id)->get();


        return view('basket.checkout')->with(compact('province'));
    }



    public function select_delivery(Request $request)
    {
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == 'province') {
                $select_district = District::where('_province_id', $data['matp'])->orderby('id', 'ASC')->get();
                $output .= '<option>--Choose District---</option>';
                foreach ($select_district as $key => $district) {
                    $output .= '<option value="' . $district->id . '">' . $district->_name . '</option>';
                }
            } else {
                $select_ward = Ward::where('_district_id', $data['matp'])->orderby('id', 'ASC')->get();
                $output .= '<option>--Choose Ward---</option>';
                foreach ($select_ward as $key => $ward) {
                    $output .= '<option value="' . $ward->id . '">' . $ward->_name . '</option>';
                }
            }
        }
        echo $output;
    }

    public function checkoutOrder(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'name_user'     =>  'required',
            'email_user'  =>  'required|email',
            'phone_user' => 'required',
            'address' => 'required',
            'phone_user' => 'required'
        ]);

        $email = $data['email_user'] ?? '';
        $name = $data['name_user'] ?? '';
        $phone = $data['phone_user'] ?? '';
        $address = $data['address'] ?? '';
        $order = Order::create($data);
       
        if ($order) {
            $cart = Session::get('cart');

            foreach ($cart as $id => $detail) {
                $order_item = new OrderItem;

                $order_item->order_id = $order->id;
                $order_item->product_id = $id;
                $order_item->qty = $detail['quantity'];
                $order_item->unit_price = $detail['price'];
                $order_item->total_price = $detail['price'] * $detail['quantity'];
                
                $r = $order_item->save();

                Session::put('name_customer', $name);
                Mail::to($email)->send(new SendMail($data));
                Session::forget('cart');
                return redirect('/home')->with('success', 'Thanks for always choosing us!');
            }
        } 
    }
}
