<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Shop List</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="grid-shop.html">Shop</a></li>
                        <li class="active">Shop List</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Section Shop-->
        <section class="section section-md bg-primary-2 text-md-left">
            <div class="container">
                <div class="row row-50">
                    <div class="col-lg-4 col-xl-3">
                        <div class="aside row row-30 row-md-50 justify-content-md-between">
                            <div class="aside-item col-12">
                                <h6 class="aside-title">Filter by Price</h6>
                                <!-- RD Range-->
                                <div class="ch-range" data-min="0" data-max="999" data-min-diff="100" data-start="[66, 235]" data-step="1" data-tooltip="false" data-input=".ch-range-input-value-1" data-input-2=".ch-range-input-value-2"></div>
                                <div class="group-xs group-justify">
                                    <div>
                                        <button class="button button-sm button-secondary button-zakaria" type="button">Filter</button>
                                    </div>
                                    <div>
                                        <div class="ch-range-wrap">
                                            <div class="ch-range-title">Price:</div>
                                            <div class="ch-range-form-wrap"><span>$</span>
                                                <input class="ch-range-input ch-range-input-value-1" type="text" name="value-1">
                                            </div>
                                            <div class="ch-range-divider"></div>
                                            <div class="ch-range-form-wrap"><span>$</span>
                                                <input class="ch-range-input ch-range-input-value-2" type="text" name="value-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                                <h6 class="aside-title">Categories</h6>
                                <ul class="list-shop-filter">
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-1" type="checkbox">All
                                        </label><span class="list-shop-filter-number">(18)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-2" type="checkbox">Furnitures
                                        </label><span class="list-shop-filter-number">(9)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-3" type="checkbox">Macarons
                                        </label><span class="list-shop-filter-number">(5)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-4" type="checkbox">Other Pastry
                                        </label><span class="list-shop-filter-number">(8)</span>
                                    </li>
                                </ul>
                                <!-- RD Search Form-->
                                <form class="ch-search form-search form-custom" action="search-results.html" method="GET">
                                    <div class="form-wrap">
                                        <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                        <label class="form-label" for="search-form">Search in shop...</label>
                                        <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="product-top-panel group-md">
                            <p class="product-top-panel-title">Showing 1–3 of 28 results</p>
                            <div>
                                <div class="group-sm group-middle">
                                    <div class="product-top-panel-sorting">
                                        <select>
                                            <option value="1">Sort by newness</option>
                                            <option value="2">Sort by popularity</option>
                                            <option value="3">Sort by alphabet</option>
                                        </select>
                                    </div>
                                    <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid" href="grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list active" href="shop-list.html"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-30 row-md-50 row-lg-60">
                            @foreach($products as $product)
                                <div class="col-12">
                                    <!-- Product-->
                                    <article class="product-modern text-center text-sm-left">
                                        <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                            <div class="unit-left">
                                                <a class="product-modern-figure" href="{{ route('web.get.product', $product->id) }}">
                                                    <img src="{{ $product->photo1->file_url ?? 'images/shop/product-placeholder.png' }}"
                                                         alt="{{ $product->name }}" width="328" height="330"/>
                                                </a>
                                            </div>
                                            <div class="unit-body">
                                                <div class="product-modern-body">
                                                    <h4 class="product-modern-title">
                                                        <a href="{{ route('web.get.product', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <div class="product-price-wrap">
                                                        @if($product->old_price)
                                                            <div class="product-price product-price-old">${{ number_format($product->old_price, 2) }}</div>
                                                        @endif
                                                        <div class="product-price">${{ number_format($product->price, 2) }}</div>
                                                    </div>
                                                    <p class="product-modern-text">{{ Str::limit($product->description, 100) }}</p>
                                                    <form action="{{ route('basket.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button class="button button-primary button-zakaria" type="submit">Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @if($product->old_price)
                                            <span class="product-badge product-badge-sale">Sale</span>
                                        @endif
                                    </article>
                                </div>
                            @endforeach
                        </div>

                    </div>
                        <div class="pagination-wrap">
                            <!-- Bootstrap Pagination-->
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                                    <li class="page-item active"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Our brand-->
    @include('web.components.our-brand')

    </div>
</x-web-layout>
