<x-web-layout>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-4" data-loop="true" data-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ asset('img/img.png') }}">
                <div class="swiper-slide-caption section-md text-sm-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7">
                                <h1 class="swiper-title-1" data-caption-animate="fadeInLeft" data-caption-delay="100">Customize Your Furniture</h1>
                                <h6 class="swiper-title-2 text-width-medium" data-caption-animate="fadeInLeft" data-caption-delay="250">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</h6>
                                <div class="button-wrap" data-caption-animate="fadeInLeft" data-caption-delay="400"><a class="button button-sm button-primary button-zakaria" href="{{ route('web.shop') }}">Shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ asset('img/logo_aist.jpg') }}">
                <div class="swiper-slide-caption section-md text-sm-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7">
                                <h1 class="swiper-title-1" data-caption-animate="fadeInLeft" data-caption-delay="100">Customize Your Furniture</h1>
                                <h6 class="swiper-title-2 text-width-medium" data-caption-animate="fadeInRight" data-caption-delay="250">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</h6>
                                <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-sm button-primary button-zakaria" href="{{ route('web.shop') }}">Shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <section class="section section-md text-md-left quote-about">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                    <article class="box-icon-creative">
                        <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                            <div class="unit-left">
                                <div class="box-icon-creative-icon icon-couch"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-creative-title"><a href="#">Free Shipping</a></h4>
                                <p class="box-icon-creative-text">Enjoy our fast &amp; free delivery</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay=".1s">
                    <article class="box-icon-creative">
                        <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                            <div class="unit-left">
                                <div class="box-icon-creative-icon icon-two-drawers"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-creative-title"><a href="#">Fresh &amp; Innovation</a></h4>
                                <p class="box-icon-creative-text">Only the freshest ingredients</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInLeft">
                    <article class="box-icon-creative">
                        <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                            <div class="unit-left">
                                <div class="box-icon-creative-icon icon-side-lamp-2"></div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-creative-title"><a href="#">Made with love</a></h4>
                                <p class="box-icon-creative-text">Prepared with care for our clients</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        </section>

    <!-- What We Offer-->
    <section class="section section-md bg-default text-md-left">
            <div class="container">
                <div class="row row-70 row-lg-50 justify-content-center align-items-md-center">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="aboutUs">
                            <h2 class="text-transform-capitalize wow fadeInRight">What We Offer</h2>
                            <!-- Bootstrap collapse-->

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum pellentesque convallis. Ut mollis libero eu massa imperdiet faucibus vitae non diam. Sed egestas felis libero, ut suscipit nisl varius non. Proin eget suscipit nulla. Nulla facilisi. In hac habitasse platea dictumst. </p>
                            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standach dummy.</p>
                            <ul class="list-marked">
                                <li>Sed egestas urna eget ipsum condimentum</li>
                                <li>Vivamus dapibus massa non orci tincidunt</li>
                                <li>Maecenas lacinia blandit ligula, at tristique mi sagittis sit</li>

                            </ul>
                            <a class="button button-sm button-primary button-zakaria" href="{{ route('web.shop') }}">shop now</a> </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="decorative-box text-center"><img src="{{asset("img/about/aboutimg.png")}}" alt="" /> </div>
                    </div>

                </div>
            </div>
        </section>

    @include('web.components.product-section')

    <!-- Testimonials-->
    <section class="section bg-brown-1 call_section_1">
            <div class="parallax-content section-md context-dark">
                <div class="container">
                    <h3 class="text-spacing-100">Summer sale </h3>
                    <h6 class="font-weight-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since</h6>
                    <a class="button button-sm button-shadow-2 button-primary button-zakaria" href="{{ route('web.shop') }}">Shop Now</a> </div>
            </div>
        </section>

    <!-- Gallery-->
    @include('web.components.gallery')

    <!-- Subscribe to Our Newsletter-->
    <section class="parallax-container call_section">
            <div class="parallax-content section-md context-dark text-lg-left">
                <div class="container">
                    <div class="row row-30 justify-content-center align-items-center align-items-lg-end">
                        <div class="col-xl-5">
                            <h2 class="parallax-title text-center text-xl-left wow fadeInLeft" data-wow-delay=".1s">Get in Touch</h2>
                        </div>
                        <div class="col-xl-7 inset-lg-bottom-10">
                            <!-- RD Mailform-->
                            <form class="ch-form ch-mailform ch-form-inline ch-form-inline-3 form-lg"
                                  data-form-output="form-output-global"
                                  data-form-type="subscribe"
                                  method="post"
                                  action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="form-wrap wow fadeInUp">
                                    <input class="form-input" id="login-name" type="text" name="first_name" required/>
                                    <label class="form-label" for="login-name">Your name</label>
                                </div>
                                <div class="form-wrap wow fadeInUp">
                                    <input class="form-input" id="contact-email" type="email" name="email" required/>
                                    <label class="form-label" for="contact-email">Your e-mail address</label>
                                </div>
                                <div class="form-button wow fadeInRight text-center">
                                    <button class="button button-zakaria button-sm button-primary" type="submit">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Our Blog-->
    @include('web.components.our-blog')

    <!-- Our brand-->
    @include('web.components.our-brand')

</x-web-layout>
