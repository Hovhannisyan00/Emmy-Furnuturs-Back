<x-web-layout>
    <div class="page">

        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Our Team</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Team Classic-->
        <section class="section section-sm section-first bg-default">
            <div class="container">
                <h3 class="font-weight-regular">#1</h3>
                <!-- Our team-->
                @include('web.components.our-team')            </div>
        </section>

        <!-- Our brand-->
        @include('web.components.our-brand')

    </div>
</x-web-layout>
