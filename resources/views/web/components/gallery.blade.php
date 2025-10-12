<!-- Grid Gallery-->
<section class="section section-md bg-default">
    <div class="container-fluid isotope-wrap isotope-custom-2">
        <div class="isotope-filters">
            <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
            <div class="isotope-filters-list-wrap">
                <ul class="isotope-filters-list">
                    <li><a class="active" href="#" data-isotope-filter="*">View all</a></li>
                    <li><a href="#" data-isotope-filter="Type 1">Furnitures</a></li>
                    <li><a href="#" data-isotope-filter="Type 2">Other pastry</a></li>
                </ul>
            </div>
        </div>
        <div class="row row-30 isotope" data-lightgallery="group" id="gallery-products">
            <!-- Products will be loaded here -->
            <div class="col-12 text-center py-5">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const productBaseUrl = "{{ url('/product') }}";
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let iso = null;

        // Initialize Isotope once the DOM is ready
        const grid = document.querySelector('.isotope');
        if (grid) {
            iso = new Isotope(grid, {
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows'
            });
        }

        // Then load the products
        loadGalleryProducts(iso);
    });

    function loadGalleryProducts(iso) {
        axios.get('/products/get-eight')
            .then(response => {
                const products = response.data.slice(0, 6);
                const galleryContainer = document.getElementById('gallery-products');

                if (products.length === 0) {
                    galleryContainer.innerHTML = '<div class="col-12 text-center"><p>No products available</p></div>';
                    return;
                }

                let html = '';
                products.forEach((product, index) => {
                    const productImage = product.photo1 ? product.photo1.file_url : '/images/no-image.png';
                    const productName = product.name || 'Product';
                    const productPrice = product.price ? '$' + parseFloat(product.price).toFixed(2) : '$0.00';
                    const productId = product.id;
                    const filterType = index % 2 === 0 ? 'Type 1' : 'Type 2';

                    html += `
                    <div class="col-sm-6 col-md-6 col-xl-4 isotope-item" data-filter="${filterType}">
                        <article class="thumbnail-classic block-1">
                            <div class="thumbnail-classic-figure">
                                <img src="${productImage}" alt="${productName}" width="370" height="315"
                                    onerror="this.src='images/grid-gallery/image-1.jpg'"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="/product/${productId}">${productName}</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">${productPrice}</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                                                 href="${productBaseUrl}/${product.id}">${product.name}>
                                                <img src="${productImage}" alt="${productName}" width="370" height="315"/>
                                            </a>
                                        </div>
                                        <div class="thumbnail-classic-button">
                                            <a class="button button-secondary-3 button-zakaria fl-bigmug-line-shopping202"
                                                href="/basket"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>`;
                });

                galleryContainer.innerHTML = html;

                // Refresh Isotope layout safely
                if (iso) {
                    iso.reloadItems();
                    iso.arrange();
                }
            })
            .catch(error => {
                console.error('Error loading gallery products:', error);
                document.getElementById('gallery-products').innerHTML =
                    '<div class="col-12 text-center"><p>Error loading products. Please try again later.</p></div>';
            });
    }
</script>
