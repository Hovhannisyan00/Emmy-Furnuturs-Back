<x-web-layout>
<!--+breadcrumbs-->
<section class="breadcrumbs-custom">
    <div class="parallax-container breadcrumbs_section">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h1 class="breadcrumbs-custom-title">Blog Post</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-blog.html">Blog</a></li>
                <li class="active">Blog Post</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Shop-->
    <section class="section section-md bg-default text-md-left">
        <div class="container">
            <div class="row row-50 row-md-60">
                <div class="col-lg-12 col-xl-12">
                    <div class="inset-xl-right-100">
                        <div class="row row-50 row-md-60 row-lg-80">
                            <div class="col-12">
                                <article class="post post-modern-1">
                                    <div class="post-modern-panel">
                                        <div>
                                            <a class="post-modern-tag" href="#">News</a>
                                        </div>
                                        <div>
                                            <time class="post-modern-time" datetime="{{ $blog->created_at }}">
                                                {{ $blog->created_at->format('F j, Y') }}
                                            </time>
                                        </div>
                                    </div>

                                    <h3 class="post-modern-title">{{ $blog->name }}</h3>

                                    <div class="post-modern-figure">
                                        <img src="{{ $blog->photo?->file_url ?? '/images/blog/blog-detail-1.jpg' }}"
                                             alt="{{ $blog->name }}" width="800" height="394" />
                                    </div>

                                    <p class="post-modern-text">
                                        {!! nl2br(e($blog->description)) !!}
                                    </p>
                                </article>

                                <!-- Quote Classic -->
                                <article class="quote-classic quote-classic-2">
                                    <div class="quote-classic-text">
                                        <div class="q">
                                            “If a Furniture recipe calls for butter, get it almost room temperature.
                                            It’ll warm up when mixed.”
                                        </div>
                                    </div>
                                </article>

                                <div class="single-post-bottom-panel">
                                    <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-sm group-tags">
                                                <a class="link-tag" href="#">News</a>
                                                <a class="link-tag" href="#">Furniture</a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="group-xs group-middle">
                                                <span class="list-social-title">Share</span>
                                                <div>
                                                    <ul class="list-inline list-social list-inline-sm">
                                                        <li><a class="icon mdi mdi-vk" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-telegram" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Posts -->
                            @if($relatedBlogs->count())
                                <div class="col-12">
                                    <h6 class="single-post-title">Related Posts</h6>
                                    <div class="row row-30">
                                        @foreach($relatedBlogs as $related)
                                            <div class="col-sm-6">
                                                <article class="post post-classic box-md post-classic-2">
                                                    <a class="post-classic-figure" href="{{ route('web.getSingleBlog', $related->id) }}">
                                                        <img src="{{ $related->photo?->file_url ?? '/images/blog/blog-home-1.jpg' }}"
                                                             alt="{{ $related->name }}" width="370" height="239" />
                                                    </a>
                                                    <div class="post-classic-content">
                                                        <div class="post-classic-time">
                                                            <time datetime="{{ $related->created_at }}">
                                                                {{ $related->created_at->format('F j, Y') }}
                                                            </time>
                                                        </div>
                                                        <h4 class="post-classic-title">
                                                            <a href="{{ route('web.getSingleBlog', $related->id) }}">
                                                                {{ $related->name }}
                                                            </a>
                                                        </h4>
                                                        <p class="post-classic-text">
                                                            {{ Str::limit(strip_tags($related->description), 120) }}
                                                        </p>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our brand-->
    @include('web.components.our-brand')
</x-web-layout>
