<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">@lang('messages.checkout')</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                        <li><a href="{{ route('web.shop') }}">@lang('messages.shop')</a></li>
                        <li class="active">@lang('messages.checkout')</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Section checkout form-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <h3 class="font-weight-medium">@lang('messages.billing_address')</h3>
                        <form class="ch-form ch-mailform form-checkout" id="billing-form">
                            <div class="row row-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-first-name-1" type="text" name="billing_first_name" data-constraints=""/>
                                        <label class="form-label" for="checkout-first-name-1">@lang('messages.first_name')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-last-name-1" type="text" name="billing_last_name" data-constraints=""/>
                                        <label class="form-label" for="checkout-last-name-1">@lang('messages.last_name')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-company-1" type="text" name="billing_company" data-constraints=""/>
                                        <label class="form-label" for="checkout-company-1">@lang('messages.company')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-address-1" type="text" name="billing_address" data-constraints=""/>
                                        <label class="form-label" for="checkout-address-1">@lang('messages.address1')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-city-1" type="text" name="billing_city" data-constraints=""/>
                                        <label class="form-label" for="checkout-city-1">@lang('messages.city_town')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-email-1" type="email" name="billing_email" data-constraints=""/>
                                        <label class="form-label" for="checkout-email-1">@lang('messages.email')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-phone-1" type="text" name="billing_phone" data-constraints=""/>
                                        <label class="form-label" for="checkout-phone-1">@lang('messages.phone')</label>
                                    </div>
                                </div>
                            </div>
                            <label class="checkbox-inline text-transform-capitalize">
                                <input name="same_address" value="checkbox-1" type="checkbox"/>
                                @lang('messages.same_billing_shipping')
                            </label>
                        </form>
                    </div>
                    <div class="col-md-10 col-lg-6" id="shipping-address-section">
                        <h3 class="font-weight-medium">@lang('messages.delivery_address')</h3>
                        <form class="ch-form ch-mailform form-checkout" id="shipping-form">
                            <div class="row row-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-first-name-2" type="text" name="shipping_first_name" data-constraints=""/>
                                        <label class="form-label" for="checkout-first-name-2">@lang('messages.first_name')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-last-name-2" type="text" name="shipping_last_name" data-constraints=""/>
                                        <label class="form-label" for="checkout-last-name-2">@lang('messages.last_name')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-company-2" type="text" name="shipping_company" data-constraints=""/>
                                        <label class="form-label" for="checkout-company-2">@lang('messages.company')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-address-2" type="text" name="shipping_address" data-constraints=""/>
                                        <label class="form-label" for="checkout-address-2">@lang('messages.address1')</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-city-2" type="text" name="shipping_city" data-constraints=""/>
                                        <label class="form-label" for="checkout-city-2">@lang('messages.city_town')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-email-2" type="email" name="shipping_email" data-constraints=""/>
                                        <label class="form-label" for="checkout-email-2">@lang('messages.email')</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="checkout-phone-2" type="text" name="shipping_phone" data-constraints=""/>
                                        <label class="form-label" for="checkout-phone-2">@lang('messages.phone')</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shopping Cart-->
        <section class="section section-sm bg-default text-md-left">
            <div class="container">
                <h3 class="font-weight-medium">@lang('messages.your_shopping_cart')</h3>
                <div class="table-custom-responsive">
                    <table class="table-custom table-cart">
                        <thead>
                        <tr>
                            <th>@lang('messages.product_name')</th>
                            <th>@lang('messages.price')</th>
                            <th>@lang('messages.quantity')</th>
                            <th>@lang('messages.total')</th>
                            <th>@lang('messages.action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>
                                    <a class="table-cart-figure" href="{{ route('dashboard.web.product', $item->product->id) }}">
                                        <img src="{{ $item->product->photo1->file_url ?? 'images/shop/product-placeholder.png' }}" alt="" width="146" height="132"/>
                                    </a>
                                    <a class="table-cart-link" href="#">{{ $item->product->name }}</a>
                                </td>
                                <td>${{ number_format($item->product->price, 2) }}</td>
                                <td>
                                    <div class="table-cart-stepper">
                                        {{$item->quantity}}
                                    </div>
                                </td>
                                <td>${{ number_format($item->quantity * $item->product->price, 2) }}</td>
                                <td>
                                    <div class="text-center mt-4">
                                        <button id="export-pdf-btn" class="button button-lg button-primary button-zakaria">
                                            @lang('messages.export_pdf')
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">@lang('messages.cart_empty')</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Section Payment-->
        <section class="section section-sm section-last bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <h3 class="font-weight-medium">@lang('messages.payment_methods')</h3>
                        <div class="box-radio">
                            <div class="radio-panel">
                                <label class="radio-inline active">
                                    <input name="input-group-radio" value="checkbox-1" type="radio" checked>@lang('messages.direct_bank_transfer')
                                </label>
                                <div class="radio-panel-content">
                                    <p>@lang('messages.bank_transfer_description')</p>
                                </div>
                            </div>
                            <div class="radio-panel">
                                <label class="radio-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="radio">@lang('messages.paypal')
                                </label>
                                <div class="radio-panel-content">
                                    <p>@lang('messages.paypal_description')</p>
                                </div>
                            </div>
                            <div class="radio-panel">
                                <label class="radio-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="radio">@lang('messages.cheque_payment')
                                </label>
                                <div class="radio-panel-content">
                                    <p>@lang('messages.cheque_description')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6">
                        <h3 class="font-weight-medium">@lang('messages.cart_total')</h3>
                        <div class="table-custom-responsive">
                            <table class="table-custom table-custom-primary table-checkout">
                                <tbody>
                                <tr>
                                    <td>@lang('messages.cart_subtotal')</td>
                                    <td>$30</td>
                                </tr>
                                <tr>
                                    <td>@lang('messages.shipping')</td>
                                    <td>@lang('messages.free')</td>
                                </tr>
                                <tr>
                                    <td>@lang('messages.total')</td>
                                    <td>$30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="group-xl group-justify justify-content-center justify-content-md-between">
                    <div>
                    </div>
                    <div>
                        <div class="group-xl group-middle">
                            <div>

                            </div><a class="button button-lg button-primary button-zakaria" href="#">@lang('messages.place_order')</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script>
        // JavaScript остается без изменений
    </script>
</x-web-layout>
