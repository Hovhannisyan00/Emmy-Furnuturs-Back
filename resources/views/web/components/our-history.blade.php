<section class="section section-fluid section-md section-relative context-dark call_section_1">
    <div class="container-fluid">
        <h2 class="text-transform-capitalize" style="color: #fff !important; position: relative;">@lang('messages.our_history')</h2>
        <div class="slick-history">
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" id="carousel-parent-2" data-items="1" data-sm-items="2" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="4" data-autoplay="true" data-loop="false">
                @foreach($histories as $history)
                    <div class="item">
                        <div class="box-info-classic">
                            <h3 class="box-info-classic-title">{{ $history->name }}</h3>
                            <p class="box-info-classic-text">{{ $history->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slick-slider child-carousel" data-items="1" data-sm-items="2" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="4" data-arrows="true" data-for="#carousel-parent-2" data-loop="false" data-focus-select="false">
                @foreach($histories as $history)
                    <div class="item">
                        <div class="heading-4 box-info-classic-year">{{ $history->year }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
