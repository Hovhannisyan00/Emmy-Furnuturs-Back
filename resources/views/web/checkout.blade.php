    <x-web-layout>
        <div class="page">
            <!--+breadcrumbs-->
            <section class="breadcrumbs-custom">
                <div class="parallax-container breadcrumbs_section">
                    <div class="breadcrumbs-custom-body parallax-content context-dark">
                        <div class="container">
                            <h1 class="breadcrumbs-custom-title">Checkout</h1>
                        </div>
                    </div>
                </div>
                <div class="breadcrumbs-custom-footer">
                    <div class="container">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="grid-shop.html">Shop</a></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Section checkout form-->
            <section class="section section-sm section-first bg-default text-md-left">
                <div class="container">
                    <div class="row row-50 justify-content-center">
                        <div class="col-md-10 col-lg-6">
                            <h3 class="font-weight-medium">Billing Address</h3>
                            <form class="ch-form ch-mailform form-checkout" id="billing-form">
                                <div class="row row-30">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-first-name-1" type="text" name="billing_first_name" data-constraints=""/>
                                            <label class="form-label" for="checkout-first-name-1">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-last-name-1" type="text" name="billing_last_name" data-constraints=""/>
                                            <label class="form-label" for="checkout-last-name-1">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-company-1" type="text" name="billing_company" data-constraints=""/>
                                            <label class="form-label" for="checkout-company-1">Company</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-address-1" type="text" name="billing_address" data-constraints=""/>
                                            <label class="form-label" for="checkout-address-1">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-city-1" type="text" name="billing_city" data-constraints=""/>
                                            <label class="form-label" for="checkout-city-1">City/Town</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-email-1" type="email" name="billing_email" data-constraints=""/>
                                            <label class="form-label" for="checkout-email-1">E-Mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-phone-1" type="text" name="billing_phone" data-constraints=""/>
                                            <label class="form-label" for="checkout-phone-1">Phone</label>
                                        </div>
                                    </div>
                                </div>
                                <label class="checkbox-inline text-transform-capitalize">
                                    <input name="same_address" value="checkbox-1" type="checkbox"/>
                                    My Billing Address and Shipping Address are the same
                                </label>
                            </form>
                        </div>
                        <div class="col-md-10 col-lg-6" id="shipping-address-section">
                            <h3 class="font-weight-medium">Delivery Address</h3>
                            <form class="ch-form ch-mailform form-checkout" id="shipping-form">
                                <div class="row row-30">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-first-name-2" type="text" name="shipping_first_name" data-constraints=""/>
                                            <label class="form-label" for="checkout-first-name-2">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-last-name-2" type="text" name="shipping_last_name" data-constraints=""/>
                                            <label class="form-label" for="checkout-last-name-2">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-company-2" type="text" name="shipping_company" data-constraints=""/>
                                            <label class="form-label" for="checkout-company-2">Company</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-address-2" type="text" name="shipping_address" data-constraints=""/>
                                            <label class="form-label" for="checkout-address-2">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-city-2" type="text" name="shipping_city" data-constraints=""/>
                                            <label class="form-label" for="checkout-city-2">City/Town</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-email-2" type="email" name="shipping_email" data-constraints=""/>
                                            <label class="form-label" for="checkout-email-2">E-Mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="checkout-phone-2" type="text" name="shipping_phone" data-constraints=""/>
                                            <label class="form-label" for="checkout-phone-2">Phone</label>
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
                    <h3 class="font-weight-medium">Your shopping cart</h3>
                    <div class="table-custom-responsive">
                        <table class="table-custom table-cart">
                            <thead>
                            <tr>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
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
                                                Export PDF
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Ваша корзина пуста.</td>
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
                            <h3 class="font-weight-medium">Payment methods</h3>
                            <div class="box-radio">
                                <div class="radio-panel">
                                    <label class="radio-inline active">
                                        <input name="input-group-radio" value="checkbox-1" type="radio" checked>Direct Bank Transfer
                                    </label>
                                    <div class="radio-panel-content">
                                        <p>Make your payment directly into our bank account. Please use your Ocher ID as the payment reference. Your ocher will be shipped right away.</p>
                                    </div>
                                </div>
                                <div class="radio-panel">
                                    <label class="radio-inline">
                                        <input name="input-group-radio" value="checkbox-1" type="radio">PayPal
                                    </label>
                                    <div class="radio-panel-content">
                                        <p>Pay via PayPal; you can pay with your credit cach if you don't have a PayPal account.</p>
                                    </div>
                                </div>
                                <div class="radio-panel">
                                    <label class="radio-inline">
                                        <input name="input-group-radio" value="checkbox-1" type="radio">Cheque Payment
                                    </label>
                                    <div class="radio-panel-content">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6">
                            <h3 class="font-weight-medium">Cart total</h3>
                            <div class="table-custom-responsive">
                                <table class="table-custom table-custom-primary table-checkout">
                                    <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>$30</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
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

                                </div><a class="button button-lg button-primary button-zakaria" href="#">Ocher</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sameAddressCheckbox = document.querySelector('input[name="same_address"]');
                const shippingAddressSection = document.querySelector('.col-md-10.col-lg-6:last-child');
                const billingForm = document.querySelector('.col-md-10.col-lg-6:first-child form');
                const shippingForm = document.querySelector('.col-md-10.col-lg-6:last-child form');

                // Function to copy billing address to shipping address
                function copyBillingToShipping() {
                    const billingInputs = billingForm.querySelectorAll('input');
                    const shippingInputs = shippingForm.querySelectorAll('input');

                    billingInputs.forEach((billingInput, index) => {
                        if (shippingInputs[index] && billingInput.type !== 'checkbox') {
                            shippingInputs[index].value = billingInput.value;
                        }
                    });
                }

                // Function to clear shipping address
                function clearShippingAddress() {
                    const shippingInputs = shippingForm.querySelectorAll('input');
                    shippingInputs.forEach(input => {
                        if (input.type !== 'checkbox') {
                            input.value = '';
                        }
                    });
                }

                // Event listener for checkbox change
                sameAddressCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        // Hide shipping address section
                        shippingAddressSection.style.display = 'none';
                        // Copy billing address to shipping address
                        copyBillingToShipping();
                    } else {
                        // Show shipping address section
                        shippingAddressSection.style.display = 'block';
                        // Clear shipping address
                        clearShippingAddress();
                    }
                });

                // Copy billing address to shipping when billing form changes (if checkbox is checked)
                billingForm.addEventListener('input', function() {
                    if (sameAddressCheckbox.checked) {
                        copyBillingToShipping();
                    }
                });
            });
        </script>
    </x-web-layout>
