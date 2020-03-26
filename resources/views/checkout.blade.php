@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('about')}}">Про нас</a></a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- coupon-area start -->
        <div class="coupon-area pt-100 pt-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            @if (auth()->check())
                            {{ Auth::user()->name }}
                            @else
                            <h3><span id="showlogin">Будь ласка увійдіть до свого кабінету</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    @include('layouts.login')
                                </div>
                            </div>
                            @endif
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>Есть купон? <span id="showcoupon">Нажмите здесь, чтобы ввести код</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" class="code" placeholder="Coupon code" />
                                            <input type="submit" value="Apply Coupon" />
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coupon-area end -->
        <!-- checkout-area start -->
        <form method="POST" action="{{route('checkout.buy')}}">
        @csrf
        <div class="checkout-area pb-100 pt-15 pb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="checkbox-form mb-sm-40">
                            <h3>Платіжні дані</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-sm-30">
                                        <label>Name <span class="required"></span></label>
                                        @if (auth()->check())
                                        <input type="text" placeholder="{{ Auth::user()->name }}"/>
                                        @else
                                        <input type="text" placeholder=" " name="name"/>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" name="address" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" name="postcode" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" name="email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Phone  <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" name="phone" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <input id="cbox" type="checkbox" />
                                        <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                        <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <label>Account password  <span class="required">*</span></label>
                                        <input type="password" placeholder="password" />
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Доставка на іншу адресу?</label>
                                        <input id="ship-box" type="checkbox" name="shipbox" />
                                    </h3>
                                </div>
                                <div id="ship-box-info">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" name=" secondname" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" name=" secondaddress"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" name=" secondpostcode"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" name=" secondemail"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" name=" secondphone"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Примітки до замовлення</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder=" Примітки про ваше замовлення, наприклад спеціальні записки про доставку." name="checkoutmess"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order">
                            <h3>Ваше змовлення</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Продукт</th>
                                            <th class="product-total">Ціна</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($cart->products as $product)
                                        <tr class="cart_item">
                                            <td class="product-name">
                                               {{$products->get($product['id'])->name}}<span class="product-quantity"></span>
                                               {{$products->get($product['id'])->brand}}<span class="product-quantity"></span>
                                               {{$products->get($product['id'])->articul}}<span class="product-quantity"></span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">{{$product['price']}}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                             <span class="product-quantity"> x {{$product['count']}}</span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">{{$product['price']*$product['count']}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                         <tr class="cart-subtotal">
                                            <th>количество</th>
                                            <td><span class="amount">{{$cart->count}}</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>сумма</th>
                                            <td><span class="amount">{{$cart->sum}}</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>сумма+%скидки</th>
                                            <td><span class=" total amount">{{$cart->sum}}</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12 cart-shopping-total">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                    <div class="cart-sub-total">
                        Quantity<span class="inner-left-md">{{$cart->count}}</span>
                    </div>
                    <div class="cart-grand-total">
                        Sum<span class="inner-left-md">{{$cart->sum}}</span>
                    </div>
                        </th>
                    </tr>
                </thead><!-- /thead -->
                <tbody>
                    <tr>
                        <td>                            
                        <div class="cart-checkout-btn pull-right">                            
                            <button type="submit" class="btn btn-primary checkout-btn">відправити замовлення</button>
                            <span class="">Checkout with multiples address!</span>                            
                        </div>
                        </td>
                    </tr>
                </tbody>
                <!-- /tbody -->
            </table><!-- /table -->
        </div><!-- /.cart-shopping-total -->
                            <div class="payment-method">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingone">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingtwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Cheque Payment
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingthree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          PayPal
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                                            <div class="card-body">
                                                 <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area end -->
    @endsection