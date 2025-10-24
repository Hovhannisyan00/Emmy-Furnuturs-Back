<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Get in touch -->
        <section class="section section-md bg-default text-md-left">
            <div class="container">
                <div class="title-classic">
                    <h3 class="title-classic-title">Get in touch</h3>
                    <p class="title-classic-subtitle">
                        We are available 24/7 by fax, e-mail or by phone. You can also use our
                        <br class="d-none d-lg-block">
                        quick contact form to ask a question about our products.
                    </p>
                </div>

                <form class="ch-form ch-mailform"
                      method="post"
                      action="{{ route('contact.submit') }}">
                    @csrf

                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input"
                                               id="contact-first-name-2"
                                               type="text"
                                               name="first_name"
                                               value="{{ old('first_name') }}"
                                               required>
                                        <label class="form-label" for="contact-first-name-2">First Name</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input"
                                               id="contact-last-name-2"
                                               type="text"
                                               name="last_name"
                                               value="{{ old('last_name') }}"
                                               required>
                                        <label class="form-label" for="contact-last-name-2">Last Name</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input"
                                               id="contact-email-2"
                                               type="email"
                                               name="email"
                                               value="{{ old('email') }}"
                                               required>
                                        <label class="form-label" for="contact-email-2">E-mail</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input"
                                               id="contact-phone-2"
                                               type="text"
                                               name="phone"
                                               value="{{ old('phone') }}">
                                        <label class="form-label" for="contact-phone-2">Phone</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-2">Message</label>
                                <textarea class="form-input textarea-lg"
                                          id="contact-message-2"
                                          name="message"
                                          rows="7"
                                          required>{{ old('message') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <button class="button button-sm button-primary button-zakaria mt-3" type="submit">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

        <!-- Our brand -->
        @include('web.components.our-brand')
    </div>
</x-web-layout>
