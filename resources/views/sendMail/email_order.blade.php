<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    .detail-order {
      background-color: #f4f8fa;
      padding: 20px;
      border-radius: 15px;
      width: 650px;
    }

    .text-bold {
      width: fit-content;
      font-weight: bold;
    }

    .text-right {
      text-align: right;
    }

    .total {
      padding: 10px;
      border-radius: 15px;
      border: 1px solid rgb(245, 179, 179);
      background-color: rgb(245, 179, 179);
    }

    .red {
      color: red;
      font-weight: bold;
    }

    .total-price {
      padding: 30px 0;
    }

    a:hover {
      text-decoration: none;
    }

    body {
      text-align: center;
      margin: 0 auto;
      width: 650px;
      font-family: 'Open Sans', sans-serif;
      background-color: #e2e2e2;
      display: block;
      color: black;
    }

    .infomation-order {
      border-radius: 15px;
      padding: 20px;
      background-color: #f4f8fa;
      margin-top: 20px;
      width: 650px;
    }

    th {
      font-size: 16px;

      text-align: center;
    }

    td {
      font-size: 16px;
      padding: 10px 0;
      text-align: center;
    }

    .tl {
      text-align: left;
    }

    .tr {
      text-align: right;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="logo"><a href="{{ route('home') }}"><img src="{{$message->embed(public_path().'\assets\logos\logo_web\logo.png')}}" alt="" width="100px" height="70px"></a></div>
    <p>Dear {{Session::get('name_customer')}}</p>
    <p>
      Thank you very much for shopping at
      <a href="{{ route('home') }}" style="font-weight: bold">Gaming Gear</a>
    </p>
    <p>
      We hope you are satisfied with your shopping experience and selected
      products.
    </p>
    <div class="detail-order">
      <div class="row">
        <div class="col-sm-12">
          <h2>Order details</h2>
        </div>
        <table style="width: 100%">
          <thead>
            <tr>
              <th>Product</th>
              <th></th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Session::get('cart') as $id => $c)
            <tr>
              <td></td>
              <td>{{$c['name']}}</td>
              <td>${{$c['price']}}</td>
              <td>{{$c['quantity']}}</td>
              <td>${{$c['price']*$c['quantity']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="total">
        <table style="width: 100%">
          <tr>
            <td class="tl text-bold">Total Product</td>
            <td class="tr">$${{$c['price']}}</td>
          </tr>
          <tr>
            <td class="tl text-bold">Transport fee</td>
            <td class="tr">$10</td>
          </tr>
        </table>
      </div>
      <div class="row total-price">
        <table style="width: 100%">
          <tr>
            <td class="tl text-bold">Total</td>
            <td class="tr text-right red">${{$c['price']*$c['quantity']+10}}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="infomation-order">
      <h2>Infomation-order</h2>
      <div class="">
        <table style="width: 100%;">
          <tr>
            <td class="tl text-bold">Time Order</td>
            <td class="tr text-right ">03/11/2022</td>
          </tr>
          <tr>
            <td class="tl text-bold">Payment Methods</td>
            <td class="tr text-right ">COD</td>
          </tr>
        </table>

      </div>
      <h2>Address</h2>
      <div class="">
        <table style="width: 100%;">
          <tr>
            <td class="tl text-bold">Name</td>
            <td class="tr text-right ">Tran Cong Thinh</td>
          </tr>
          <tr>
            <td class="tl text-bold">Address</td>
            <td class="tr text-right "> 248 Hùng Vương Di Linh Lâm Đồng, Huyện Di Linh , Lâm Đồng Vietnam
            </td>
          </tr>
          <tr>
            <td class="tl text-bold">Phone number</td>
            <td class="tr text-right ">0981640315</td>
          </tr>
        </table>


      </div>
    </div>
  </div>
</body>

</html>