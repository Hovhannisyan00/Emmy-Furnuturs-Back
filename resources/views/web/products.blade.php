<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">@lang('messages.shop_list')</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ url('/') }}">@lang('messages.home')</a></li>
                        <li><a href="{{ route('web.shop') }}">@lang('messages.shop')</a></li>
                        <li class="active">@lang('messages.shop_list')</li>
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
                                <h6 class="aside-title">@lang('messages.filter_by_price')</h6>
                                <!-- RD Range-->
                                <div class="ch-range"
                                     data-min="0"
                                     data-max="999"
                                     data-min-diff="100"
                                     data-start="[66, 235]"
                                     data-step="1"
                                     data-tooltip="false"
                                     data-input=".ch-range-input-value-1"
                                     data-input-2=".ch-range-input-value-2"></div>

                                <div class="group-xs group-justify">
                                    <div>
                                        <button id="filter-btn" class="button button-sm button-secondary button-zakaria" type="button">
                                            @lang('messages.filter')
                                        </button>
                                    </div>
                                    <div>
                                        <div class="ch-range-wrap">
                                            <div class="ch-range-title">@lang('messages.price'):</div>
                                            <div class="ch-range-form-wrap">
                                                <span>$</span>
                                                <input id="min_price" class="ch-range-input ch-range-input-value-1" type="text" name="min_price">
                                            </div>
                                            <div class="ch-range-divider"></div>
                                            <div class="ch-range-form-wrap">
                                                <span>$</span>
                                                <input id="max_price" class="ch-range-input ch-range-input-value-2" type="text" name="max_price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                                <h6 class="aside-title">@lang('messages.categories')</h6>
                                <ul class="list-shop-filter">
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-1" type="checkbox">@lang('messages.all')
                                        </label><span class="list-shop-filter-number">(18)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-2" type="checkbox">@lang('messages.furnitures')
                                        </label><span class="list-shop-filter-number">(9)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-3" type="checkbox">@lang('messages.macarons')
                                        </label><span class="list-shop-filter-number">(5)</span>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="input-group-radio" value="checkbox-4" type="checkbox">@lang('messages.other_pastry')
                                        </label><span class="list-shop-filter-number">(8)</span>
                                    </li>
                                </ul>
                                <!-- RD Search Form-->
                                <form class="ch-search form-search form-custom" action="search-results.html" method="GET">
                                    <div class="form-wrap">
                                        <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                        <label class="form-label" for="search-form">@lang('messages.search_in_shop')</label>
                                        <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="product-top-panel group-md">
                            <p class="product-top-panel-title" id="results-text">
                                @if(isset($products) && $products->count() > 0)
                                    @if($products instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                        @lang('messages.showing_results', [
                                            'start' => $products->firstItem(),
                                            'end' => $products->lastItem(),
                                            'total' => $products->total()
                                        ])
                                    @else
                                        @lang('messages.showing_results', [
                                            'start' => 1,
                                            'end' => $products->count(),
                                            'total' => $products->count()
                                        ])
                                            @endif
                                            @else
                                                @lang('messages.showing_no_results')
                                            @endif
                            </p>
                            <div>
                                <div class="group-sm group-middle">
                                    <div class="product-view-toggle">
                                        <a class="mdi mdi-apps product-view-link product-view-grid" href="grid-shop.html"></a>
                                        <a class="mdi mdi-format-list-bulleted product-view-link product-view-list active" href="shop-list.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="products-container" class="row row-30 row-md-50 row-lg-60">
                            @if(isset($products) && $products->count() > 0)
                                @foreach($products as $product)
                                    <div class="col-12">
                                        <!-- Product-->
                                        <article class="product-modern text-center text-sm-left">
                                            <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                                <div class="unit-left">
                                                    <a class="product-modern-figure" href="{{ route('dashboard.web.product', $product->id) }}">
                                                        <img src="{{ $product->photo1->file_url ?? asset('images/shop/product-placeholder.png') }}"
                                                             alt="{{ $product->name }}" width="328" height="330"/>
                                                    </a>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="product-modern-body">
                                                        <h4 class="product-modern-title">
                                                            <a href="{{ route('dashboard.web.product', $product->id) }}">{{ $product->name }}</a>
                                                        </h4>
                                                        <div class="product-price-wrap">
                                                            @if($product->old_price && $product->old_price > $product->price)
                                                                <div class="product-price product-price-old">${{ number_format($product->old_price, 2) }}</div>
                                                            @endif
                                                            <div class="product-price">${{ number_format($product->price, 2) }}</div>
                                                        </div>
                                                        <p class="product-modern-text">{{ Str::limit($product->description, 100) }}</p>
                                                        <form action="{{ route('basket.add') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button class="button button-primary button-zakaria" type="submit">@lang('messages.add_to_cart')</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($product->old_price && $product->old_price > $product->price)
                                                @php
                                                    $discountPercent = round((($product->old_price - $product->price) / $product->old_price) * 100);
                                                @endphp
                                                <span class="product-badge product-badge-sale">-{{ $discountPercent }}%</span>
                                            @endif
                                        </article>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center">
                                    <div class="empty-state py-5">
                                        <i class="icon mdi mdi-package-variant" style="font-size: 64px; color: #ccc; margin-bottom: 20px;"></i>
                                        <p class="text-muted" style="font-size: 18px;">@lang('messages.no_products_found')</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        @if(isset($products) && $products instanceof \Illuminate\Pagination\LengthAwarePaginator && $products->hasPages())
                            <div class="mt-5">
                                {{ $products->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Our brand-->
        @include('web.components.our-brand')
    </div>
</x-web-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButton = document.querySelector('#filter-btn');
        const minInput = document.querySelector('#min_price');
        const maxInput = document.querySelector('#max_price');
        const productsContainer = document.querySelector('#products-container');
        const resultsText = document.querySelector('#results-text');
        const filterUrl = "{{ route('web.shop.filter') }}";
        const productBaseUrl = "{{ url('/product') }}";
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';

        if (!filterButton || !productsContainer) return;

        filterButton.addEventListener('click', async () => {
            const min = minInput?.value?.trim() || '0';
            const max = maxInput?.value?.trim() || '999999';

            productsContainer.classList.add('loading');
            productsContainer.innerHTML = '<div class="col-12 text-center"><p>@lang('messages.loading')</p></div>';

            try {
                const response = await fetch(`${filterUrl}?min_price=${encodeURIComponent(min)}&max_price=${encodeURIComponent(max)}`, {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                if (!response.ok) {
                    throw new Error('HTTP ' + response.status);
                }

                const data = await response.json();
                renderProducts(data.products || []);
            } catch (err) {
                console.error('Error fetching products:', err);
                productsContainer.innerHTML = `
                    <div class="col-12 text-center">
                        <div class="empty-state py-5">
                            <i class="icon mdi mdi-alert-circle-outline" style="font-size: 64px; color: #ff6b6b; margin-bottom: 20px;"></i>
                            <p class="text-muted" style="font-size: 18px;">@lang('messages.loading_error')</p>
                        </div>
                    </div>
                `;
                if (resultsText) resultsText.textContent = '@lang('messages.showing_no_results')';
            } finally {
                productsContainer.classList.remove('loading');
            }
        });

        function renderProducts(products) {
            productsContainer.innerHTML = '';

            if (!Array.isArray(products) || products.length === 0) {
                productsContainer.innerHTML = `
                    <div class="col-12 text-center">
                        <div class="empty-state py-5">
                            <i class="icon mdi mdi-package-variant" style="font-size: 64px; color: #ccc; margin-bottom: 20px;"></i>
                            <p class="text-muted" style="font-size: 18px;">@lang('messages.no_products_found')</p>
                        </div>
                    </div>
                `;
                if (resultsText) resultsText.textContent = '@lang('messages.showing_no_results')';
                return;
            }

            if (resultsText) {
                resultsText.textContent = `Showing ${products.length} product(s)`;
            }

            const escapeHtml = (unsafe) => {
                if (unsafe === null || unsafe === undefined) return '';
                return String(unsafe)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#039;');
            };

            const truncate = (text, length) => text?.length > length ? text.substring(0, length) + '…' : text || '';

            products.forEach(product => {
                const hasDiscount = product.old_price && product.old_price > product.price;
                const discountPercent = hasDiscount
                    ? Math.round(((product.old_price - product.price) / product.old_price) * 100)
                    : 0;

                const oldPriceHtml = hasDiscount
                    ? `<div class="product-price product-price-old">$${Number(product.old_price).toFixed(2)}</div>`
                    : '';

                const priceHtml = `<div class="product-price">$${Number(product.price).toFixed(2)}</div>`;
                const photoUrl = product.photo1?.file_url || '{{ asset("images/shop/product-placeholder.png") }}';
                const productUrl = `${productBaseUrl}/${encodeURIComponent(product.id)}`;

                const formHtml = `
                    <form action="{{ route('basket.add') }}" method="POST">
                        <input type="hidden" name="_token" value="${escapeHtml(csrfToken)}">
                        <input type="hidden" name="product_id" value="${escapeHtml(product.id)}">
                        <input type="hidden" name="quantity" value="1">
                        <button class="button button-primary button-zakaria" type="submit">@lang('messages.add_to_cart')</button>
                    </form>
                `;

                const discountBadge = hasDiscount
                    ? `<span class="product-badge product-badge-sale">-${discountPercent}%</span>`
                    : '';

                const productHtml = `
                    <div class="col-12">
                        <article class="product-modern text-center text-sm-left">
                            <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                <div class="unit-left">
                                    <a class="product-modern-figure" href="${productUrl}">
                                        <img src="${escapeHtml(photoUrl)}" alt="${escapeHtml(product.name)}" width="328" height="330"/>
                                    </a>
                                </div>
                                <div class="unit-body">
                                    <div class="product-modern-body">
                                        <h4 class="product-modern-title">
                                            <a href="${productUrl}">${escapeHtml(product.name)}</a>
                                        </h4>
                                        <div class="product-price-wrap">
                                            ${oldPriceHtml}
                                            ${priceHtml}
                                        </div>
                                        <p class="product-modern-text">${escapeHtml(truncate(product.description, 100))}</p>
                                        ${formHtml}
                                    </div>
                                </div>
                            </div>
                            ${discountBadge}
                        </article>
                    </div>
                `;

                productsContainer.insertAdjacentHTML('beforeend', productHtml);
            });
        }
    });
</script>
