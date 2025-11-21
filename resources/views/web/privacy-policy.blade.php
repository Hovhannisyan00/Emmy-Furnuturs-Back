<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">@lang('messages.privacy_policy_title')</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                        <li><a href="#">@lang('messages.elements')</a></li>
                        <li class="active">@lang('messages.privacy_policy')</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Privacy Policy-->
        <section class="section section-md bg-default text-md-left">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 offset-lg-1 col-lg-10 col-xl-8">
                        <!-- Terms list-->
                        <dl class="list-terms list-terms-1">
                            <dt class="heading-4">@lang('messages.privacy_section_1_title')</dt>
                            <dd>
                                @lang('messages.privacy_section_1_content')
                            </dd>

                            <dt class="heading-4">@lang('messages.privacy_section_2_title')</dt>
                            <dd>
                                @lang('messages.privacy_section_2_content')
                            </dd>

                            <dt class="heading-4">@lang('messages.privacy_section_3_title')</dt>
                            <dd>
                                @lang('messages.privacy_section_3_content')
                            </dd>

                            <dt class="heading-4">@lang('messages.privacy_section_4_title')</dt>
                            <dd>
                                @lang('messages.privacy_section_4_content')
                            </dd>

                            <!-- Continue similarly for sections 5–8 -->

                        </dl>
                        <a class="privacy-link" href="mailto:emmy-web@mail.ru">emmy-web@mail.ru</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our brand-->
        @include('web.components.our-brand')
        @include('SEO.privacy-seo')

    </div>
</x-web-layout>
