<div style="font-family: Arial, sans-serif; background: #f8f8f8; padding: 30px;">

    <div style="
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    ">

        <h2 style="text-align: center; color: #333;">
            Здравствуйте, {{ $order['name'] }}!
        </h2>

        <p style="font-size: 16px; color: #555;">
            Статус вашего заказа <strong>#{{ $order['id'] }}</strong> был обновлён.
        </p>

        <div style="
            background: #e8f1ff;
            padding: 15px;
            border-left: 4px solid #1a73e8;
            margin: 20px 0;
            border-radius: 6px;
        ">
            <p style="margin: 0; font-size: 18px;">
                <strong>Статус:</strong>
                <span style="color: #1a73e8;">{{ $order['status'] }}</span>
            </p>
        </div>

        <hr style="margin: 30px 0;">

        <h3 style="color: #444;">Ваш промокод</h3>

        <p style="font-size: 22px; font-weight: bold; color: #333;">
            {{ $coupon }}
        </p>

        <p style="color: #555;">
            Используйте этот код при следующей покупке, чтобы получить скидку.
        </p>

        <br>

        <p style="font-size: 14px; color: #888; text-align: center;">
            Спасибо, что выбираете нашу компанию!
        </p>

    </div>
</div>
