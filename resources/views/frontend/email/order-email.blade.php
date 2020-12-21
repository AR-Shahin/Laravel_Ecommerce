<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <p>Dear , {{$name}}</p>
    <p>payment method {{ $order->payment->payment_method }}</p>

    <h6>You have ordered.</h6>


    <table class="bg-white table table-bordered table-hover text-center">
        <thead>
        <tr>
            <th class="text-left">Product Name</th>
            <th>Price</th>
            <th>Size</th>
            <th>Color</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total = 0;
        ?>
        @foreach(Cart::content() as $item)
            <tr>
                <td class="text-left">{{$item->name}}</td>
                <td>${{$item->price}}</td>
                <td>{{$item->options->size_name}}</td>
                <td>{{$item->options->color_name}}</td>
                <td>{{$item->qty}}</td>
                <td>$ {{ $subTotal = $item->qty*$item->price}}</td>
            </tr>
            <?php
            $total += $subTotal;
            ?>
        @endforeach
        </tbody>
        <tfoot class="font-weight-600">
        {{--<tr>--}}
        {{--<td colspan="5" class="text-right">Shipping </td>--}}
        {{--<td>(5%)-> {{ Cart::subtotal()}}</td>--}}
        {{--</tr>--}}
        <tr>
            <td colspan="5" class="text-right">Total</td>
            <td>${{$total}}</td>
        </tr>
        </tfoot>
    </table>
</div>

<hr>

</body>
</html>