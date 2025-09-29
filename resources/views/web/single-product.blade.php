<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Single Product</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="grid-shop.html">Shop</a></li>
                        <li class="active">Single Product</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Single Product-->
        <section class="section section-md section-first bg-default">
            <div class="container">
                <div class="row row-30">
                    <div class="col-lg-6">
                        <div class="slick-vertical slick-product">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo1->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo2->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo3->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo4->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo3->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{ $product->photo4->file_url }}" alt="" width="530" height="480"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-product">
                            <h3 class="text-transform-none font-weight-medium">{{ $product->name }}</h3>
                            <div class="group-md group-middle">
                                <div class="single-product-price">{{ $product->price }}</div>
                                <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                            </div>
                            <p>{{ $product->description }}</p>
                            <hr class="hr-gray-100">
                            <ul class="list list-description">
{{--                                @dd($product)--}}
                                <li><span>Categories:</span><span>{{ $product->categories->name }}</span></li>
                                <li><span>Weight:</span><span>0.5 kg</span></li>
                                <li><span>Box:</span><span>60 x 60 x 90 cm</span></li>
                            </ul>
                            <div class="group-xs group-middle">

                                <div class="product-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                </div>

                                <div><a class="button button-lg button-secondary button-zakaria" href="{{ route('web.cart') }}">Add to cart</a></div>
                            </div>
                            <hr class="hr-gray-100">

                            @include('web.components.social-media')

                        </div>
                    </div>
                </div>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                    <!-- Nav tabs-->
                    <div class="nav-tabs-wrap">
                        <ul class="nav nav-tabs nav-tabs-1">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Additional information</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Delivery and payment</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes-->
                    <div class="tab-content tab-content-1">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <div class="box-comment">
                                <div class="unit flex-column flex-sm-row unit-spacing-md">
                                    <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/testimonials/thumb1.jpg" alt="" width="119" height="119"/></a></div>
                                    <div class="unit-body">
                                        <div class="group-sm group-justify">
                                            <div>
                                                <div class="group-xs group-middle">
                                                    <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5>
                                                    <div class="box-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                                                </div>
                                            </div>
                                            <div class="box-comment-time">
                                                <time datetime="2019-11-30">Nov 30, 2019</time>
                                            </div>
                                        </div>
                                        <p class="box-comment-text">Lorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te.</p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-transform-none font-weight-medium">Leave a Review</h4>
                          
                        </div>
                        <div class="tab-pane fade" id="tabs-1-2">
                            <div class="single-product-info">
                                <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                    <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span></div>
                                    <div class="unit-body">
                                        <p>Lorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum teLorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-3">
                            <div class="single-product-info">
                                <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                    <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                    <div class="unit-body">
                                        <p>Lorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum teLorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related Products-->
        <section class="section section-md section-last bg-primary-2">
            <div class="container">
                <h4 class="font-weight-sbold">Featured Products</h4>
                <div class="row row-lg row-30 row-lg-50 justify-content-center">
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/shop/shop-1.png" alt="" width="220" height="160"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price product-price-old">$30.00</div>
                                    <div class="product-price">$17.00</div>
                                </div>
                            </div><span class="product-badge product-badge-sale">Sale</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-gray-14 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/shop/shop-3.png" alt="" width="128" height="220"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$13.00</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-gray-14 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/shop/shop-5.png" alt="" width="145" height="163"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$17.00</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-gray-14 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/shop/shop-7.png" alt="" width="117" height="131"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$11.00</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-gray-14 button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
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
