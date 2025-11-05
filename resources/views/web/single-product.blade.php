<style>
    .child-carousel {
        display: flex !important;      /* Thumbnails in a row */
        justify-content: flex-start;   /* Align to left */
        gap: 10px;                     /* Space between thumbnails */
        margin-top: 15px;
        flex-wrap: nowrap;             /* All in one line */
    }

    /* Each thumbnail wrapper */
    .child-carousel .item {
        flex: 0 0 auto;                /* Prevent shrinking/stretching */
    }

    /* Thumbnail images */
    .child-carousel .thumbnail {
        width: 100px;                  /* Thumbnail width */
        height: 100px;                 /* Thumbnail height */
        object-fit: cover;             /* Keep ratio */
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }

    /* Active thumbnail highlight */
    .child-carousel .thumbnail.slick-current {
        border-color: #007bff;         /* Highlight active */
        opacity: 1;
    }

    #child-carousel .slick-track {
        display: flex !important;
        gap: 10px;
    }

    /* Убираем надписи Prev/Next и оставляем только стрелки */
    .slick-prev,
    .slick-next {
        font-size: 0 !important;       /* скрывает текст */
        background: none !important;   /* убирает фон */
        border: none !important;
        outline: none !important;
    }

    /* Добавляем чёрные стрелки */
    .slick-prev:before,
    .slick-next:before {
        color: #000 !important;        /* чёрный цвет стрелок */
        opacity: 1 !important;
        font-size: 32px !important;    /* размер стрелок */
        line-height: 1;
    }

    /* Влево и вправо */
    .slick-prev:before {
        content: "←" !important;
    }

    .slick-next:before {
        content: "→" !important;
    }

    /* Стили для выбора размера */
    .size-selection {
        margin-bottom: 20px;
    }

    .size-select {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        cursor: pointer;
    }

    .size-select:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
    }

    .price-display {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }
</style>
<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">@lang('messages.single_product')</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{route('web.home')}}">@lang('messages.home')</a></li>
                        <li><a href="{{ route('web.shop') }}">@lang('messages.shop')</a></li>
                        <li class="active">@lang('messages.single_product')</li>
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
                            <!-- Main Carousel -->
                            <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                                @foreach([$product->photo1, $product->photo2, $product->photo3, $product->photo4] as $photo)
                                    @if($photo)
                                        <div class="item">
                                            <div class="slick-product-figure">
                                                <img src="{{ $photo->file_url }}" alt="" width="530" height="480"/>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Thumbnails -->
                            <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3">
                                @foreach([$product->photo1, $product->photo2, $product->photo3, $product->photo4] as $photo)
                                    @if($photo)
                                        <div class="item">
                                            <div class="slick-product-figure">
                                                <img src="{{ $photo->file_url }}" alt="" width="100" height="100" class="thumbnail"/>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="single-product">
                            <h3 class="text-transform-none font-weight-medium">{{ $product->name }}</h3>
                            <div class="group-md group-middle">
                                <!-- Обновленное отображение цены -->
                                <div class="single-product-price" id="price-display">
                                    @if($product->sizes->count() > 1)
                                        @lang('messages.price_from') {{ $product->sizes->min('price') }} @lang('messages.currency_rub')
                                    @elseif($product->sizes->count() === 1)
                                        {{ $product->sizes->first()->price }} @lang('messages.currency_rub')
                                    @else
                                        {{ $product->price }} @lang('messages.currency_rub')
                                    @endif
                                </div>
                                <div class="single-product-rating">
                                    <span class="icon mdi mdi-star"></span>
                                    <span class="icon mdi mdi-star"></span>
                                    <span class="icon mdi mdi-star"></span>
                                    <span class="icon mdi mdi-star"></span>
                                    <span class="icon mdi mdi-star-half"></span>
                                </div>
                            </div>
                            <p>{{ $product->description }}</p>
                            <hr class="hr-gray-100">
                            <ul class="list list-description">
                                <li><span>@lang('messages.categories'):</span><span>{{ $product->categories->name }}</span></li>
                                <li><span>@lang('messages.weight'):</span><span>0.5 kg</span></li>
                                <li><span>@lang('messages.box'):</span><span>60 x 60 x 90 cm</span></li>
                            </ul>

                            <!-- Выбор размера -->
                            @if($product->sizes->isNotEmpty())
                                <div class="size-selection">
                                    <label for="size-select" style="display: block; margin-bottom: 8px; font-weight: bold;">@lang('messages.select_size'):</label>
                                    <select id="size-select" class="size-select" name="size_id">
                                        <option value="">@lang('messages.choose_size')</option>
                                        @foreach($product->sizes as $size)
                                            <option value="{{ $size->id }}" data-price="{{ $size->price }}">
                                                {{ $size->size }} - {{ $size->price }} @lang('messages.currency_rub')
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="group-xs group-middle">
                                <div class="product-stepper">
                                    <input id="quantity-input" class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                </div>

                                <form action="{{ route('basket.add') }}" method="POST" class="d-inline-block ms-2" id="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" id="quantity-hidden" value="1">
                                    <input type="hidden" name="size_id" id="size-id-hidden" value="">
                                    <button id="add-to-cart" type="submit" class="button button-lg button-secondary button-zakaria">@lang('messages.add_to_cart')</button>
                                </form>
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">@lang('messages.additional_info')</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">@lang('messages.delivery_payment')</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes-->
                    <div class="tab-content tab-content-1">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <div class="box-comment">
                                <div class="unit flex-column flex-sm-row unit-spacing-md">
                                    <div class="unit-left"><a class="box-comment-figure" href="#"><img src="" alt="" width="119" height="119"/></a></div>
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
                            <h4 class="text-transform-none font-weight-medium">@lang('messages.leave_review')</h4>
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
        @include('web.components.featured-products', ['featuredProducts' => $featuredProducts])
        <!-- Our brand-->
        @include('web.components.our-brand')
    </div>
</x-web-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mainCarousel = document.querySelector('#carousel-parent');
        const thumbnails = document.querySelectorAll('.child-carousel .thumbnail');

        if (!mainCarousel || thumbnails.length === 0) return;

        if (typeof $ !== 'undefined' && !$(mainCarousel).hasClass('slick-initialized')) {
            $(mainCarousel).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: false,
                asNavFor: '#child-carousel',
            });

            $('#child-carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '#carousel-parent',
                focusOnSelect: true,
                arrows: true,
                vertical: false,
            });
        }

        // Highlight the first thumbnail safely
        thumbnails[0].classList.add('slick-current');

        // Add click events for thumbnails
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', function () {
                thumbnails.forEach(t => t.classList.remove('slick-current'));
                thumb.classList.add('slick-current');

                if (typeof $ !== 'undefined' && $(mainCarousel).hasClass('slick-initialized')) {
                    $(mainCarousel).slick('slickGoTo', index);
                } else {
                    mainCarousel.querySelectorAll('.item').forEach((item, i) => {
                        item.style.display = i === index ? 'block' : 'none';
                    });
                }
            });
        });

        // Обработчик выбора размера
        const sizeSelect = document.getElementById('size-select');
        const sizeIdHidden = document.getElementById('size-id-hidden');
        const priceDisplay = document.getElementById('price-display');

        if (sizeSelect) {
            sizeSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const sizeId = this.value;
                const price = selectedOption.getAttribute('data-price');

                // Обновляем скрытое поле с ID размера
                sizeIdHidden.value = sizeId;

                // Обновляем отображение цены
                if (sizeId && price) {
                    priceDisplay.textContent = price + ' @lang('messages.currency_rub')';
                }
            });
        }

        // Обновленный обработчик добавления в корзину
        const addToCartBtn = document.getElementById('add-to-cart');
        const quantityInput = document.getElementById('quantity-input');
        const addToCartForm = document.getElementById('add-to-cart-form');

        addToCartBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Проверяем, выбран ли размер (если есть размеры)
            if (sizeSelect && sizeSelect.value === '') {
                alert('@lang('messages.please_select_size')');
                return;
            }

            // Обновляем скрытое поле количества
            document.getElementById('quantity-hidden').value = quantityInput.value;

            const formData = new FormData(addToCartForm);

            fetch("{{ route('basket.add') }}", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    alert(data.message || "@lang('messages.product_added_to_cart')");
                })
                .catch(error => console.error('Ошибка:', error));
        });
    });
</script>
