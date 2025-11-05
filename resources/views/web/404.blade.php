<x-web-layout>
    <div class="page">

        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">@lang('messages.error_404')</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                        <li><a href="#">@lang('messages.elements')</a></li>
                        <li class="active">@lang('messages.error_404')</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="context-dark bg-image call_section section-md">
                <div class="text-center">
                    <div class="container">
                        <div class="title-modern">404</div>
                        <h3 class="font-weight-light text-spacing-100">@lang('messages.page_not_found')</h3>
                        <a class="button button-sm button-primary button-zakaria" href="{{route('web.home')}}">@lang('messages.go_to_home_page')</a>
                    </div>
                </div>
            </div>
        </section>

        @include('web.components.our-brand')

    </div>
</x-web-layout>
