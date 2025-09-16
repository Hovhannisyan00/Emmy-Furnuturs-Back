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
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Popular products</h6>
                                <div class="row row-10 row-lg-20 gutters-10">
                                    <div class="col-4 col-sm-6 col-md-12">
                                        <!-- Product Minimal-->
                                        <article class="product-minimal">
                                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                                <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/shop/product-mini-2.png" alt="" width="106" height="104"/></a></div>
                                                <div class="unit-body">
                                                    <p class="product-minimal-title"><a href="single-product.html">Birthday Furniture</a></p>
                                                    <p class="product-minimal-price">$22.00</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-4 col-sm-6 col-md-12">
                                        <!-- Product Minimal-->
                                        <article class="product-minimal">
                                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                                <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/shop/product-mini-3.png" alt="" width="106" height="104"/></a></div>
                                                <div class="unit-body">
                                                    <p class="product-minimal-title"><a href="single-product.html">White CupFurniture</a></p>
                                                    <p class="product-minimal-price">$10.00</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-4 col-sm-6 col-md-12">
                                        <!-- Product Minimal-->
                                        <article class="product-minimal">
                                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                                <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/shop/product-mini-1.png" alt="" width="106" height="104"/></a></div>
                                                <div class="unit-body">
                                                    <p class="product-minimal-title"><a href="single-product.html">Summer CupFurniture</a></p>
                                                    <p class="product-minimal-price">$11.00</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
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
                            <div class="col-12">
                                <!-- Product-->
                                <article class="product-modern text-center text-sm-left">
                                    <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                        <div class="unit-left"><a class="product-modern-figure" href="single-product.html"><img src="images/shop/shop-list-1.png" alt="" width="328" height="330"/></a></div>
                                        <div class="unit-body">
                                            <div class="product-modern-body">
                                                <h4 class="product-modern-title"><a href="single-product.html">Strawberry ShortFurniture</a></h4>
                                                <div class="product-price-wrap">
                                                    <div class="product-price product-price-old">$30.00</div>
                                                    <div class="product-price">$17.00</div>
                                                </div>
                                                <p class="product-modern-text">Sed eleifend, lacus nec bibendum pulvinar, nibh mauris vehicula augue, sit amet mattis ligula lorem eu nisl. Integer a egestas</p><a class="button button-primary button-zakaria" href="cart-page.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div><span class="product-badge product-badge-sale">Sale</span>
                                </article>
                            </div>
                            <div class="col-12">
                                <!-- Product-->
                                <article class="product-modern text-center text-sm-left">
                                    <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                        <div class="unit-left"><a class="product-modern-figure" href="single-product.html"><img src="images/shop/shop-list-1.png" alt="" width="328" height="330"/></a></div>
                                        <div class="unit-body">
                                            <div class="product-modern-body">
                                                <h4 class="product-modern-title"><a href="single-product.html">Black Currant Macaron</a></h4>
                                                <div class="product-price-wrap">
                                                    <div class="product-price">$15.00</div>
                                                </div>
                                                <p class="product-modern-text">Elogiums peregrinationes in lotus quadrata! Caniss accelerare, tanquam neuter guttus. Cum barcas persuadere</p><a class="button button-primary button-zakaria" href="cart-page.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12">
                                <!-- Product-->
                                <article class="product-modern text-center text-sm-left">
                                    <div class="unit unit-spacing-0 flex-column flex-sm-row">
                                        <div class="unit-left"><a class="product-modern-figure" href="single-product.html"><img src="images/shop/shop-list-1.png" alt="" width="328" height="330"/></a></div>
                                        <div class="unit-body">
                                            <div class="product-modern-body">
                                                <h4 class="product-modern-title"><a href="single-product.html">Unicorn Furniture</a></h4>
                                                <div class="product-price-wrap">
                                                    <div class="product-price product-price-old">$35.00</div>
                                                    <div class="product-price">$13.00</div>
                                                </div>
                                                <p class="product-modern-text">Canis, mons, et fluctus. Cur silva observare? Cum luna studere, omnes cottaes demitto gratis, altus absolutioes</p><a class="button button-primary button-zakaria" href="cart-page.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div><span class="product-badge product-badge-sale">Sale</span>
                                </article>
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
            </div>
        </section>
        <!-- Our brand-->
        <section class="section section-md bg-default brannddlogo">
            <div class="container">
                <!-- Owl Carousel-->
                <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5" data-margin="30" data-dots="true" data-autoplay="true">
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                    <article class=" box-md"> <a class="" href="#">
                            <figure class="logo-grey-style"> <img src="./images/logo-emmy.png" alt="" />
                                <figcaption>
                                    <h5>Emmy</h5>
                                </figcaption>
                            </figure>
                        </a> </article>
                </div>
            </div>
        </section>
    </div>
</x-web-layout>
