<section class="section section-md bg-primary-2">
    <div class="container">
        <h2 class="text-transform-capitalize wow fadeScale">Our Products</h2>
        <div id="products-container" class="row row-lg row-30 row-lg-30">
            <!-- JS вставит сюда продукты -->
        </div>
    </div>
</section>


<script>
    const productBaseUrl = "{{ url('/product') }}";
    const cardUrl = "{{ url('/basket') }}";
</script>


<script>
    async function fetchProducts() {
        try {
            const response = await fetch("{{ route('web.getEightProducts') }}");
            const data = await response.json();
            const container = document.getElementById('products-container');
            container.innerHTML = '';
            data.forEach((product, index) => {
                const delay = (index * 0.1).toFixed(1);
                console.log(product);
                const html = `
  <div class="col-sm-6 col-md-4 col-lg-3">
    <article class="product wow fadeInRight" data-wow-delay=".${delay}s">
      <div class="product-body">
        <div class="product-figure">
          <img
            src="${product.photo1 ? product.photo1.file_url : '/images/no-image.png'}"
            alt="${product.name}"
            width="148"
            height="128"
          />
        </div>

        <h5 class="product-title">
          <a href="${productBaseUrl}/${product.id}">${product.name}</a>
        </h5>

        <div class="product-price-wrap">
          ${product.old_price
                    ? `<div class="product-price product-price-old">$${product.old_price}</div>`
                    : ''
                }
          <div class="product-price">$${product.price}</div>
        </div>
      </div>

      <div class="product-button-wrap">
        <div class="product-button">
          <a class="button button-gray-14 button-zakaria ch-navbar-basket fas ch-navbar-search-toggle fas fa-search fa-2x"
             href="${productBaseUrl}/${product.id}"></a>
        </div>
        <div class="product-button">
          <a class="button button-primary-2 button-zakaria ch-navbar-basket fas fa-shopping-cart"
             href="${cardUrl}/${product.id}"></a>
        </div>
      </div>
    </article>
  </div>
`;
                container.insertAdjacentHTML('beforeend', html);
            });

        } catch (error) {
            console.error(error);
        }
    }

    document.addEventListener('DOMContentLoaded', fetchProducts);
</script>
