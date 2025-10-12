<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Masonry Gallery</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="grid-gallery.html">Gallery</a></li>
                        <li class="active">Masonry Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        @include('web.components.gallery')

        @include('web.components.our-brand')

    </div>
</x-web-layout>
