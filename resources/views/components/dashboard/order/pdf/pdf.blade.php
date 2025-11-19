<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Invoice #{{ $order->id }}</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-light: #eef2ff;
            --secondary: #10b981;
            --dark: #1f2937;
            --light: #f8fafc;
            --gray: #6b7280;
            --border: #e5e7eb;
            --wood: #8B4513;
            --cream: #F5F5DC;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            color: var(--dark);
            background: #f9fafb;
            padding: 15px;
            margin: 0;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        /* New Brand Header */
        .brand-header {
            background: linear-gradient(135deg, var(--wood), #a0522d);
            color: white;
            padding: 25px 30px;
            text-align: center;
            border-bottom: 5px solid var(--cream);
        }

        .brand-title {
            font-size: 32px;
            font-weight: 700;
            margin: 0 0 8px 0;
            letter-spacing: 1px;
        }

        .brand-subtitle {
            font-size: 16px;
            margin: 0 0 15px 0;
            opacity: 0.9;
            font-style: italic;
        }

        .brand-tagline {
            font-size: 14px;
            margin: 0;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.5;
        }

        .brand-divider {
            width: 80px;
            height: 3px;
            background: var(--cream);
            margin: 15px auto;
            border-radius: 2px;
        }

        .invoice-header {
            background: linear-gradient(135deg, var(--primary), #6366f1);
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .invoice-title h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }

        .invoice-title p {
            margin: 5px 0 0;
            opacity: 0.9;
        }

        .invoice-badge {
            background: rgba(255,255,255,0.2);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .invoice-body {
            padding: 20px 30px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
        }

        .section-title::before {
            content: "";
            display: inline-block;
            width: 4px;
            height: 18px;
            background: var(--primary);
            margin-right: 10px;
            border-radius: 2px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        .info-card {
            background: var(--light);
            border-radius: 8px;
            padding: 18px;
            border-left: 3px solid var(--primary);
        }

        .info-row {
            display: flex;
            margin-bottom: 6px;
        }

        .info-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--gray);
        }

        .info-value {
            color: var(--dark);
        }

        .payment-summary {
            background: var(--primary-light);
            border-radius: 8px;
            padding: 18px;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(79, 70, 229, 0.1);
        }

        .payment-row.total {
            font-weight: 700;
            font-size: 18px;
            color: var(--primary);
            border-bottom: none;
            border-top: 2px solid var(--primary);
            margin-top: 8px;
            padding-top: 12px;
        }

        .notes-box {
            background: #fff9ed;
            border-radius: 8px;
            padding: 18px;
            border-left: 3px solid #f59e0b;
        }

        .notes-label {
            font-weight: 600;
            margin-bottom: 6px;
            color: #92400e;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .status-completed {
            background: #d1fae5;
            color: #065f46;
        }

        .status-processing {
            background: #dbeafe;
            color: #1e40af;
        }

        .status-paid {
            background: #d1fae5;
            color: #065f46;
        }

        .status-cancelled {
            background: #fee2e2;
            color: #991b1b;
        }

        .status-refunded {
            background: #f3f4f6;
            color: #374151;
        }

        .invoice-footer {
            background: var(--light);
            padding: 15px 30px;
            text-align: center;
            color: var(--gray);
            font-size: 13px;
            border-top: 1px solid var(--border);
        }

        .company-info {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .invoice-container {
                box-shadow: none;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
<div class="invoice-container">
    <!-- New Brand Header Section -->
    <div class="brand-header">
        <h1 class="brand-title">EMMY FURNITURE</h1>
        <div class="brand-divider"></div>
        <p class="brand-subtitle">Crafting Timeless Pieces for Your Home</p>
        <p class="brand-tagline">
            At Emmy Furniture, we believe your home should be a reflection of your personality and style.
            Each piece in our collection is meticulously crafted with attention to detail, quality materials,
            and sustainable practices. Thank you for choosing us to be part of your home's story.
        </p>
    </div>

    <div class="invoice-header">
        <div class="invoice-title">
            <h1>Order Invoice</h1>
            <p>Thank you for your purchase</p>
        </div>
        <div class="invoice-badge">
            #{{ $order->order_number ?? $order->id }}
        </div>
    </div>

    <div class="invoice-body">
        <div class="section">
            <div class="grid-3">
                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Order ID:</span>
                        <span class="info-value">#{{ $order->id }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Status:</span>
                        <span class="info-value">
                                @php
                                    // Handle enum status properly
                                    $statusValue = $order->status instanceof \App\Models\Order\Enums\OrderStatus
                                        ? $order->status->value
                                        : (string) $order->status;
                                    $statusLower = strtolower($statusValue);
                                @endphp
                                <span class="status-badge status-{{ $statusLower }}">
                                    {{ $statusValue }}
                                </span>
                            </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Order Date:</span>
                        <span class="info-value">{{ $order->created_at }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Last Updated:</span>
                        <span class="info-value">{{ $order->updated_at }}</span>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Customer:</span>
                        <span class="info-value">{{ $customer?->first_name }} {{ $customer?->last_name }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email:</span>
                        <span class="info-value">{{ $customer?->email }}</span>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Shipping Method:</span>
                        <span class="info-value">Standard Shipping</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Payment Method:</span>
                        <span class="info-value">Credit Card</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Shipping Details</h2>
            <div class="grid-2">
                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">Full Name:</span>
                        <span class="info-value">{{ $order->shipping_first_name }} {{ $order->shipping_last_name }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Company:</span>
                        <span class="info-value">{{ $order->shipping_company ?: '—' }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Address:</span>
                        <span class="info-value">{{ $order->shipping_address }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">City:</span>
                        <span class="info-value">{{ $order->shipping_city }}</span>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-row">
                        <span class="info-label">State:</span>
                        <span class="info-value">{{ $order->shipping_state }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Country:</span>
                        <span class="info-value">{{ $order->shipping_country }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">ZIP Code:</span>
                        <span class="info-value">{{ $order->shipping_zip_code }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Phone:</span>
                        <span class="info-value">{{ $order->shipping_phone }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email:</span>
                        <span class="info-value">{{ $order->shipping_email }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Payment Summary</h2>
            <div class="payment-summary">
                <div class="payment-row">
                    <span>Subtotal</span>
                    <span>${{ number_format($order->subtotal, 2) }}</span>
                </div>
                <div class="payment-row">
                    <span>Tax</span>
                    <span>${{ number_format($order->tax, 2) }}</span>
                </div>
                <div class="payment-row">
                    <span>Shipping Cost</span>
                    <span>${{ number_format($order->shipping_cost, 2) }}</span>
                </div>
                <div class="payment-row total">
                    <span>TOTAL</span>
                    <span>${{ number_format($order->total, 2) }}</span>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Additional Information</h2>
            <div class="notes-box">
                <div class="notes-label">Order Notes:</div>
                <div>{{ $order->notes ?? 'No additional notes provided.' }}</div>
            </div>
        </div>
    </div>

    <div class="invoice-footer">
        <p>Thank you for choosing Emmy Furniture! If you have any questions about your order, please contact our customer service team.</p>
        <p>Invoice generated on {{ date('F j, Y') }}</p>
        <div class="company-info">
            <span>Emmy Furniture &copy; {{ date('Y') }}</span>
            <span>Customer Service: support@emmyfurniture.com</span>
            <span>Phone: (555) 123-4567</span>
        </div>
    </div>
</div>
</body>
</html>
