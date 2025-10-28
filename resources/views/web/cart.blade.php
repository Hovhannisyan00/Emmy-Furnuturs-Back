<x-web-layout>
    <div class="page">
        <!--+breadcrumbs-->
        <section class="breadcrumbs-custom">
            <div class="parallax-container breadcrumbs_section">
                <div class="breadcrumbs-custom-body parallax-content context-dark">
                    <div class="container">
                        <h1 class="breadcrumbs-custom-title">Cart Page</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumbs-custom-footer">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="{{ route('web.home') }}">Home</a></li>
                        <li><a href="{{ route('web.shop') }}">Shop</a></li>
                        <li class="active">Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Shopping Cart-->
        <section class="section section-md bg-default">
            <div class="container">
                <!-- shopping-cart-->
                <div class="table-custom-responsive">
                    <table class="table-custom table-cart">
                        <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>
                                    <a class="table-cart-figure" href="{{"/product/".$item->product->id}}"><img src="{{ $item->product->photo1->file_url ?? 'images/shop/product-placeholder.png' }}" alt="" width="146" height="132"/></a>
                                    <a class="table-cart-link" href="#">{{ $item->product->name }}</a>
                                </td>
                                <td>${{ number_format($item->product->price, 2) }}</td>
                                <td>
                                    <div class="table-cart-stepper">
                                        <form action="{{ route('basket.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input class="form-input" type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="1000">
                                            <button type="submit" class="button button-sm button-primary">Update</button>
                                        </form>
                                    </div>
                                </td>
                                <td>${{ number_format($item->quantity * $item->product->price, 2) }}</td>
                                <td>
                                    <button type="button" class="btn-delete" data-item-id="{{ $item->id }}" data-item-name="{{ $item->product->name }}">
                                        <span class="mdi mdi-trash-can-outline" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Ваша корзина пуста.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="group-xl group-justify justify-content-center justify-content-md-between mt-4">

                    <div>
                        <div class="group-xl group-middle">
                            <div>
                                <div class="group-md group-middle">
                                    <div class="heading-5 font-weight-medium text-gray-500">Total</div>
                                    <div class="heading-3 font-weight-normal">${{ number_format($total, 2) }}</div>
                                </div>
                            </div>
                            <a class="button button-lg button-primary button-zakaria" href="{{ route('order.checkout') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('web.components.our-brand')

    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal-overlay" id="deleteModal">
        <div class="modal-container">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Removal</h3>
                <button type="button" class="modal-close" id="closeModal">
                    <span class="mdi mdi-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-icon">
                    <span class="mdi mdi-alert-circle-outline"></span>
                </div>
                <p>Are you sure you want to remove <strong id="itemName"></strong> from your cart?</p>
                <p class="modal-warning">This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" id="cancelDelete">Cancel</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-confirm">Yes, Remove</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Enhanced Delete Button Styles */
        .btn-delete {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            color: #dc3545;
            cursor: pointer;
            padding: 8px 12px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: white;
            border-color: #dc3545;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
        }

        .btn-delete:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(220, 53, 69, 0.2);
        }

        .btn-delete .mdi {
            font-size: 18px;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 20px;
        }

        .modal-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            animation: modalSlideIn 0.3s ease-out;
            overflow: hidden;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 24px;
            color: #6c757d;
            cursor: pointer;
            padding: 4px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .modal-close:hover {
            background: #f8f9fa;
            color: #495057;
        }

        .modal-body {
            padding: 24px;
            text-align: center;
        }

        .modal-icon {
            font-size: 48px;
            color: #e74c3c;
            margin-bottom: 16px;
        }

        .modal-body p {
            font-size: 16px;
            color: #495057;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .modal-warning {
            font-size: 14px;
            color: #6c757d;
            font-style: italic;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            padding: 20px 24px;
            border-top: 1px solid #e9ecef;
            background: #f8f9fa;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
        }

        .btn-cancel:hover {
            background: #5a6268;
            transform: translateY(-1px);
        }

        .btn-confirm {
            background: #e74c3c;
            color: white;
        }

        .btn-confirm:hover {
            background: #c0392b;
            transform: translateY(-1px);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .btn-delete {
                width: 36px;
                height: 36px;
                padding: 6px 10px;
            }

            .btn-delete .mdi {
                font-size: 16px;
            }

            .modal-container {
                margin: 0 15px;
            }

            .modal-footer {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');
            const modal = document.getElementById('deleteModal');
            const closeModal = document.getElementById('closeModal');
            const cancelDelete = document.getElementById('cancelDelete');
            const itemName = document.getElementById('itemName');
            const deleteForm = document.getElementById('deleteForm');

            // Open modal when delete button is clicked
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-item-id');
                    const productName = this.getAttribute('data-item-name');

                    itemName.textContent = productName;
                    deleteForm.action = "{{ route('basket.remove', '') }}/" + itemId;

                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close modal functions
            function closeModalFunc() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            closeModal.addEventListener('click', closeModalFunc);
            cancelDelete.addEventListener('click', closeModalFunc);

            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModalFunc();
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'flex') {
                    closeModalFunc();
                }
            });
        });
    </script>
</x-web-layout>
