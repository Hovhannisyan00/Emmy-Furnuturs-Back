<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Cart Page</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="grid-shop.html">Shop</a></li>
                        <li class="active">Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Shopping Cart-->
        <section class="section section-md bg-default">
            <div class="container">
                <!-- shopping-cart-->
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
                                    <a class="table-cart-figure" href="{{"/product/".$item->product->id}}"><img src="{{ $item->product->photo1->file_url ?? 'images/shop/product-placeholder.png' }}" alt="" width="146" height="132"/></a>
                                    <a class="table-cart-link" href="#">{{ $item->product->name }}</a>
                                </td>
                                <td>${{ number_format($item->product->price, 2) }}</td>
                                <td>
                                    <div class="table-cart-stepper">
                                        <form action="{{ route('basket.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input class="form-input" type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="1000">
                                            <button type="submit" class="button button-sm button-primary">Update</button>
                                        </form>
                                    </div>
                                </td>
                                <td>${{ number_format($item->quantity * $item->product->price, 2) }}</td>
                                <td>
                                    <form action="{{ route('basket.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button button-sm button-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Ваша корзина пуста.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="group-xl group-justify justify-content-center justify-content-md-between mt-4">
                    <div>
                        <form class="ch-form ch-mailform ch-form-inline ch-form-coupon">
                            <div class="form-wrap">
                                <input class="form-input form-input-inverse" id="coupon-code" type="text" name="coupon">
                                <label class="form-label" for="coupon-code">Coupon code</label>
                            </div>
                            <div class="form-button">
                                <button class="button button-lg button-primary button-zakaria" type="submit">Apply</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="group-xl group-middle">
                            <div>
                                <div class="group-md group-middle">
                                    <div class="heading-5 font-weight-medium text-gray-500">Total</div>
                                    <div class="heading-3 font-weight-normal">${{ number_format($total, 2) }}</div>
                                </div>
                            </div>
                            <a class="button button-lg button-primary button-zakaria" href="{{ route('order.checkout') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('web.components.our-brand')

    </div>
</x-web-layout>
