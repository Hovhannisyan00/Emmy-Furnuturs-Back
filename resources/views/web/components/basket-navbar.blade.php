@if(Auth::check())
    <!-- RD Navbar Basket -->
    <div class="ch-navbar-basket-wrap" style="font-size: 0.85rem;">
        <button class="ch-navbar-basket fas fa-shopping-cart" data-ch-navbar-toggle=".cart-inline" style="font-size: 1.2rem; padding: 6px 8px;">
            <span>0</span>
        </button>

        <div class="cart-inline" style="width: 250px; font-size: 0.85rem;">
            <div class="cart-inline-header" style="padding: 8px 12px;">
                <h5 class="cart-inline-title">In cart:<span> 0</span> Products</h5>
                <h6 class="cart-inline-title">Total price:<span> $0</span></h6>
            </div>

            <div class="cart-inline-body" style="max-height: 200px; overflow-y: auto; padding: 8px 12px;">
                <!-- Items will load dynamically -->
                <div class="text-center py-2" id="basket-loading">
                    <span>Loading...</span>
                </div>
            </div>

            <div class="cart-inline-footer" style="padding: 8px 12px;">
                <div class="group-sm" style="display: flex; gap: 4px; flex-wrap: wrap;">
                    <a class="button button-default-outline-2 button-zakaria" href="{{ route('web.cart') }}" style="padding: 4px 8px; font-size: 0.8rem;">
                        Go to cart
                    </a>
                    <a class="button button-primary button-zakaria" href="{{ route('order.checkout') }}" style="padding: 4px 8px; font-size: 0.8rem;">
                        Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('{{ route('basket.data') }}')
                .then(response => response.json())
                .then(data => {
                    const basketButton = document.querySelector('.ch-navbar-basket span');
                    const basketHeaderCount = document.querySelector('.cart-inline-header h5 span');
                    const basketHeaderTotal = document.querySelector('.cart-inline-header h6 span');
                    const basketBody = document.querySelector('.cart-inline-body');
                    const loading = document.getElementById('basket-loading');

                    if (loading) loading.remove();

                    basketButton.textContent = data.count;
                    basketHeaderCount.textContent = ` ${data.count}`;
                    basketHeaderTotal.textContent = ` $${data.total}`;

                    basketBody.innerHTML = '';

                    if (data.items.length === 0) {
                        basketBody.innerHTML = `<div class="text-center py-2">Your basket is empty</div>`;
                        return;
                    }

                    data.items.forEach(item => {
                        const el = `
                        <div class="cart-inline-item" style="margin-bottom: 6px;">
                            <div class="unit unit-spacing-sm align-items-center" style="gap: 6px;">
                                <div class="unit-left">
                                    <a class="cart-inline-figure" href="/product/${item.id}">
                                        <img src="${item.image.file_url}" alt="${item.name}" width="60" height="55"/>
                                    </a>
                                </div>
                                <div class="unit-body">
                                    <h6 class="cart-inline-name" style="font-size: 0.8rem;">
                                        <a href="/product/${item.id}">${item.name}</a>
                                    </h6>
                                    <div class="group-xs group-middle" style="display: flex; gap: 4px; align-items: center;">
                                        <div class="table-cart-stepper">
                                            <input class="form-input" type="number" value="${item.quantity}" min="1" max="1000" style="width: 50px; padding: 2px; font-size: 0.75rem;"/>
                                        </div>
                                        <h6 class="cart-inline-title" style="font-size: 0.8rem;">$${item.price}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        basketBody.insertAdjacentHTML('beforeend', el);
                    });
                })
                .catch(err => {
                    console.error('Ошибка при загрузке корзины:', err);
                    const basketBody = document.querySelector('.cart-inline-body');
                    basketBody.innerHTML = `<div class="text-center py-2 text-danger">Error loading basket</div>`;
                });
        });
    </script>
@endif
