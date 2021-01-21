@extends('layouts.front_master')
@section('title','View Cart Product')
@section('main_content')
    <!--Body Content-->
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Shopping Cart</h1></div>
            </div>
        </div>
        <!--End Page Title-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="alert alert-success text-uppercase" role="alert">
                        <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
                    </div>

                    @if(Cart::count() != 0)
                        <div class="cart style2">
                            <table>
                                <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $total = 0;
                                ?>
                                @foreach(Cart::content() as $item)
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="#"><img class="cart__image" src="{{asset($item->options->image)}}" alt="Elastic Waist Dress - Navy / Small"></a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="#">{{$item->name}} </a>
                                            </div>

                                            <div class="cart__meta-text">
                                                Color: {{$item->options->color_name}}<br>Size: {{$item->options->size_name}}<br>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">${{$item->price}}</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <form action="{{route('update.cart')}}" method="post">
                                                @csrf
                                                <div class="cart__qty text-center">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                        <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                                        <input type="hidden" name="productId" value="{{$item->id}}">
                                                        <input class="cart__qty-input qty" type="text" name="quantity" id="qty" value="{{$item->qty}}" pattern="[0-9]*">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                        <input type="submit" class="btn btn-info mt-1" value="Update">
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">${{$subTotal = $item->qty*$item->price}}</span></div>
                                        </td>
                                        <td class="text-center small--hide"><a href="{{route('delete.cart',$item->rowId)}}" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                    </tr>
                                    <?php
                                    $total+= $subTotal;
                                    ?>
                                @endforeach
                                </tbody>

                                <script>
                                    $(document).ready(function () {
                                        $('.cart__remove').on('click',function (e) {
                                            e.preventDefault();

                                            var url = $(this).attr('href');
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!',
                                                timer: 9500
                                            }).then((result) => {
                                                if(result.isConfirmed) {
                                                window.location.href = url;
                                                Swal.fire(
                                                    'Deleted!',
                                                    'Your file has been deleted.',
                                                    'success'
                                                )
                                            }
                                        })
                                        });
                                    })
                                </script>
                                <tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{url('/')}}" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
                                        <a href="{{route('clear.cart')}}" name="clear" class="btn btn-secondary btn--small  small--hide">Clear Cart</a>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endif
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                            @if(!Session::has('coupon'))
                            <div class="coupon_wrapper">
                                <h5>Discount Codes</h5>
                                <form action="{{route('set-coupon')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="address_zip">Enter your coupon code if you have one.</label>
                                        <input type="text" name="name" required value="{{old('name')}}">
                                    </div>
                                    <div class="actionRow">
                                        <div><input type="submit" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                    </div>
                                </form>
                            </div>
                                @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">
                                <div class="row border-bottom pb-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                    <span class="col-12 col-sm-6 text-right"><span class="money">{{$site->currency}}{{$total}}</span></span>
                                </div>
                                {{--<div class="row border-bottom pb-2 pt-2">--}}
                                {{--<span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>--}}
                                {{--<span class="col-12 col-sm-6 text-right">$10.00</span>--}}
                                {{--</div>--}}
                                @if(Session::has('coupon'))
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Coupon</span>
                                    <span class="col-12 col-sm-6 text-right"> <span class="text-primary mr-2">{{Session::get('coupon')['name']}}</span> <a href="{{route('remove-coupon')}}" class="btn btn-sm">Remove</a></span>
                                </div>
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Discount</span>
                                    @php
                                    $discount = $total * (Session::get('coupon')['discount']/100);
                                    @endphp
                                    <span class="col-12 col-sm-6 text-right">{{$site->currency}}{{$discount}} <-> [{{Session::get('coupon')['discount']}}%]</span>
                                </div>
                                @endif
                                <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                    <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{$site->currency}}{{$total - $discount}}</span></span>
                                </div>
                                <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                <p class="cart_tearm">
                                    <label>
                                        <input type="checkbox" name="tearm" class="checkbox" value="tearm" required>
                                        I agree with the terms and conditions
                                    </label>
                                </p>
                                @if(Cart::count() != 0)
                                    <a href="{{route('shipping.form')}}" name="checkout" class="btn btn--small-wide checkout" disabled="">Checkout</a>
                                @endif
                                <div class="paymnet-img"><img src="{{asset('frontend')}}/assets/images/payment-img.jpg" alt="Payment"></div>
                                <p><a href="#;">Checkout with Multiple Addresses</a></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Body Content-->
@stop