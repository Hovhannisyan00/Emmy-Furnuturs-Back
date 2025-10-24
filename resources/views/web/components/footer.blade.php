<footer class="section footer-modern footer-modern-2">
    <div class="footer-modern-body section-md">
        <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between align-items-start">

                <!-- Brand -->
                <div class="col-md-6 col-lg-4 wow fadeInRight">
                    <div class="footer-brand-block">
                        <div class="footer-classic-brand mb-3">
                            <a href="{{ route('web.home') }}">
                                <img class="logo-default" src="{{ asset('img/about/logo-emmy.png') }}" alt="Emmy Logo">
                            </a>
                        </div>
                        <p class="footer-classic-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                </div>

                <!-- Categories -->
                <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInRight" data-wow-delay=".15s">
                    <h5 class="footer-modern-title">Categories</h5>
                    <ul class="footer-modern-list footer-modern-list-2">
                        @foreach($categories as $category)
                            <li>
                                    <a href="{{ route('web.products', ['categoryId' => $category['id']]) }}">
                                        {{ $category['name'] }}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Navigation + Get in Touch -->
                <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <h5 class="footer-modern-title">Navigation</h5>
                    <ul class="footer-modern-list footer-modern-list-2 mb-4">
                        <li><a href="{{ route('web.about') }}">About Us</a></li>
                        <li><a href="{{ route('web.team') }}">Our Team</a></li>
                        <li><a href="{{ route('web.shop') }}">Shop</a></li>
                        <li><a href="{{ route('web.contact-us') }}">Contact Us</a></li>
                    </ul>

                    <h5 class="footer-modern-title">Get in Touch</h5>
                    <ul class="contacts-creative">
                        <li>
                            <div class="unit flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body">
                                    <a href="#">272B St#4, 1st Floor<br>DC Office, Washington, USA</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                <div class="unit-body"><a href="tel:+01234226789">+01-23-4226789</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                <div class="unit-body"><a href="mailto:hello@example.com">hello@example.com</a></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-modern-panel text-center mt-4">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="mb-0">
                        &copy; 2025
                        <a href="https://www.linkedin.com/in/arsen-hovhannisyan-b861aa347/" target="_blank" rel="noopener noreferrer">
                            Arsen
                        </a>. All Rights Reserved.
                        <a href="{{ route('web.privacy.policy') }}">Privacy Policy</a>
                    </p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="#">
                        <img src="{{ asset('img/about/paymentimg.png') }}" alt="Payment Methods">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
