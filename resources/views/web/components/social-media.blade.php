<div class="group-xs group-middle">
    <span class="list-social-title">@lang('messages.share')</span>
    <div>
        <ul class="list-inline list-social list-inline-sm">
            <li>
                <a class="icon fab fa-facebook-f"
                   href="javascript:void(0);"
                   onclick="shareTo('facebook')"></a>
            </li>
            <li>
                <a class="icon fab fa-twitter"
                   href="javascript:void(0);"
                   onclick="shareTo('twitter')"></a>
            </li>
            <li>
                <a class="icon fab fa-instagram"
                   href="javascript:void(0);"
                   onclick="shareTo('instagram')"></a>
            </li>
            <li>
                <a class="icon fab fa-google-plus-g"
                   href="javascript:void(0);"
                   onclick="shareTo('google')"></a>
            </li>
        </ul>
    </div>
</div>

<script>
    function shareTo(network) {
        const pageUrl = encodeURIComponent(window.location.href);
        let shareUrl = "";

        switch (network) {
            case "facebook":
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
                break;
            case "twitter":
                shareUrl = `https://twitter.com/intent/tweet?url=${pageUrl}`;
                break;
            case "instagram":
                // Instagram не поддерживает прямой share URL
                shareUrl = `https://www.instagram.com/`;
                break;
            case "google":
                shareUrl = `https://plus.google.com/share?url=${pageUrl}`;
                break;
        }

        // Копируем ссылку в буфер обмена
        navigator.clipboard.writeText(window.location.href)
            .then(() => {
                console.log("URL copied");
                // Показываем уведомление о копировании
                showNotification('@lang('messages.url_copied')');
            })
            .catch(err => {
                console.error("Copy failed", err);
                showNotification('@lang('messages.copy_failed')');
            });

        // Открываем новую вкладку
        window.open(shareUrl, "_blank");
    }

    function showNotification(message) {
        // Создаем временное уведомление
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            z-index: 10000;
            font-size: 14px;
        `;
        notification.textContent = message;
        document.body.appendChild(notification);

        // Удаляем уведомление через 3 секунды
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 3000);
    }
</script>
