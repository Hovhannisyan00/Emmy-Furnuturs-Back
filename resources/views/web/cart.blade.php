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
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a class="table-cart-figure" href="single-product.html"><img src="images/shop/product-mini-2.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Lorem ipsum</a></td>
                            <td>$13.00</td>
                            <td>
                                <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                </div>
                            </td>
                            <td>$13</td>
                        </tr>
                        <tr>
                            <td><a class="table-cart-figure" href="single-product.html"><img src="images/shop/product-mini-3.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Lorem ipsum</a></td>
                            <td>$17.00</td>
                            <td>
                                <div class="table-cart-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                </div>
                            </td>
                            <td>$17</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="group-xl group-justify justify-content-center justify-content-md-between">
                    <div>
                        <form class="ch-form ch-mailform ch-form-inline ch-form-coupon">
                            <div class="form-wrap">
                                <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text">
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
                                    <div class="heading-3 font-weight-normal">$30</div>
                                </div>
                            </div><a class="button button-lg button-primary button-zakaria" href="{{ route('web.checkout') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our brand-->
        <section class="section section-md bg-default brannddlogo">
            <div class="container">
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5" data-margin="30" data-dots="true" data-autoplay="true">
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                </div>
            </div>
        </section>

    </div>
</x-web-layout>
