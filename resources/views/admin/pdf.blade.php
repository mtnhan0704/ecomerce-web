<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Order Details</h1>

        Customer name :<h3>{{$order->name}}</h3>
        Customer email :<h3>{{$order->email}}</h3>
        Customer phone :<h3>{{$order->phone}}</h3>
        Customer address :<h3>{{$order->address}}</h3>
        Customer Id :<h3>{{$order->user_id}}</h3>
         
        product Name :<h3>{{$order->product_title}}</h3> 
        product price :<h3>{{$order->price}}</h3>
        product quantity:<h3>{{$order->quantity}}</h3>
        Payment Status :<h3>{{$order->payment_status}}</h3>
        product ID :<h3>{{$order->product_id}}</h3>

    <br><br>

        <img height="250" width="300" src="product/{{$order->image}}" >



    </body>
</html>