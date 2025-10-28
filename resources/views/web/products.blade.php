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
                                                Filter
                                            </button>
                                        </div>
                                        <div>
                                            <div class="ch-range-wrap">
                                                <div class="ch-range-title">Price:</div>
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
                                        <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid" href="grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list active" href="shop-list.html"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div id="products-container" class="row row-30 row-md-50 row-lg-60">
                                @foreach($products as $product)
                                    <div class="col-12">
                                        <!-- Product-->
                                        <article class="product-modern text-center text-sm-left">
                                            <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                                <div class="unit-left">
                                                    <a class="product-modern-figure" href="{{ route('dashboard.web.product', $product->id) }}">
                                                        <img src="{{ $product->photo1->file_url ?? 'images/shop/product-placeholder.png' }}"
                                                             alt="{{ $product->name }}" width="328" height="330"/>
                                                    </a>
                                                </div>
                                                <div class="unit-body">
                                                    <div class="product-modern-body">
                                                        <h4 class="product-modern-title">
                                                            <a href="{{ route('dashboard.web.product', $product->id) }}">{{ $product->name }}</a>
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
                        @if(isset($products) && $products instanceof \Illuminate\Pagination\LengthAwarePaginator)
                            {{ $products->links('vendor.pagination.bootstrap-5') }}
                        @endif
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
            const resultsText = document.querySelector('.product-top-panel-title');
            const filterUrl = "{{ route('web.shop.filter') }}";
            const productBaseUrl = "{{ url('/product') }}";
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';

            if (!filterButton || !productsContainer) return;

            filterButton.addEventListener('click', async () => {
                const min = minInput?.value?.trim() || '0';
                const max = maxInput?.value?.trim() || '999999';

                productsContainer.classList.add('loading');
                productsContainer.innerHTML = '<div class="col-12 text-center"><p>Loading...</p></div>';

                try {
                    const response = await fetch(`${filterUrl}?min_price=${encodeURIComponent(min)}&max_price=${encodeURIComponent(max)}`, {
                        headers: { 'Accept': 'application/json' }
                    });

                    if (!response.ok) {
                        const text = await response.text();
                        throw new Error('HTTP ' + response.status + ' — ' + text);
                    }

                    const data = await response.json();
                    renderProducts(data.products || []);
                } catch (err) {
                    console.error('Error fetching products:', err);
                    productsContainer.innerHTML = '<div class="col-12 text-center"><p>Ошибка при загрузке. Попробуйте ещё раз.</p></div>';
                    if (resultsText) resultsText.textContent = '';
                } finally {
                    productsContainer.classList.remove('loading');
                }
            });

            function renderProducts(products) {
                productsContainer.innerHTML = '';
                if (!Array.isArray(products) || products.length === 0) {
                    productsContainer.innerHTML = '<div class="col-12 text-center"><p>No products found in this price range.</p></div>';
                    if (resultsText) resultsText.textContent = 'Showing 0 results';
                    return;
                }

                if (resultsText) resultsText.textContent = `Showing 1–${products.length} of ${products.length} results`;

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
                    const oldPriceHtml = product.old_price ? `<div class="product-price product-price-old">$${Number(product.old_price).toFixed(2)}</div>` : '';
                    const priceHtml = `<div class="product-price">$${Number(product.price).toFixed(2)}</div>`;
                    const photoUrl = product.photo1?.file_url || '{{ asset("images/shop/product-placeholder.png") }}';
                    const productUrl = `${productBaseUrl}/${encodeURIComponent(product.id)}`;

                    const formHtml = `
                <form action="{{ route('basket.add') }}" method="POST">
                    <input type="hidden" name="_token" value="${escapeHtml(csrfToken)}">
                    <input type="hidden" name="product_id" value="${escapeHtml(product.id)}">
                    <input type="hidden" name="quantity" value="1">
                    <button class="button button-primary button-zakaria" type="submit">Add to cart</button>
                </form>
            `;

                    const discountBadge = product.discount
                        ? `<span class="product-badge product-badge-sale">-${Math.round((product.discount / (product.price + product.discount)) * 100)}%</span>`
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
